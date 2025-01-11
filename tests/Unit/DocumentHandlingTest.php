<?php

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

test('can parse and render markdown content', function () {
    $markdown = "# Test Header\n\nThis is a **bold** text.";
    $response = $this->post('/parse-markdown', [
        'content' => $markdown
    ]);

    $response->assertStatus(200)
        ->assertSee('Test Header')
        ->assertSee('bold');
});

test('can upload and process docx file', function () {
    Storage::fake('documents');

    $file = UploadedFile::fake()->create('document.docx', 100);

    $response = $this->post('/upload-docx', [
        'document' => $file
    ]);

    $response->assertStatus(200);
    Storage::disk('documents')->assertExists($file->hashName());
});

test('can parse and validate XML content', function () {
    $validXml = '<?xml version="1.0" encoding="UTF-8"?><root>
    <item>Test</item>
</root>';

    $response = $this->post('/validate-xml', [
        'content' => $validXml
    ]);

    $response->assertStatus(200)
        ->assertJson(['valid' => true]);
});

test('can upload and render document as blog post', function () {
    Storage::fake('uploads');

    $file = UploadedFile::fake()->create('blog-post.docx', 100);

    $response = $this->post('/blog/upload', [
        'document' => $file,
        'title' => 'Test Blog Post',
        'slug' => 'test-blog-post'
    ]);

    $response->assertStatus(200)
        ->assertJson([
            'title' => 'Test Blog Post',
            'slug' => 'test-blog-post'
        ]);

    // Verify the document was stored
    Storage::disk('uploads')->assertExists($file->hashName());
});

test('rejects invalid document formats', function () {
    Storage::fake('uploads');

    $file = UploadedFile::fake()->create('invalid.exe', 100);

    $response = $this->post('/blog/upload', [
        'document' => $file
    ]);

    $response->assertStatus(422);
});
