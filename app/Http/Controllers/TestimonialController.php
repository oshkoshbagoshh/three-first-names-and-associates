<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Image;

class TestimonialController extends Controller
{
    public function index()
    {
        // Get all active testimonials
        $testimonials = Testimonial::active()->get();

        // Get featured testimonials
        $featuredTestimonials = Testimonial::featured()->active()->get();

        // Get testimonials by industry
        $testimonialsByIndustry = Testimonial::active()
            ->get()
            ->groupBy('industry');

        return view('testimonials.index', compact(
            'testimonials',
            'featuredTestimonials',
            'testimonialsByIndustry'
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'industry' => 'required|string|max:255',
            'avatar' => 'nullable|image|max:1024', // 1MB max
            'is_featured' => 'boolean',
            'status' => 'in:active,pending,inactive',
        ]);

        try {
            // Handle avatar upload
            if ($request->hasFile('avatar')) {
                $avatar = $request->file('avatar');
                $avatarPath = $avatar->store('testimonials/avatars', 'public');

                // Process the image
                $image = Image::make(storage_path('app/public/'.$avatarPath));

                // Resize to square while maintaining aspect ratio
                $image->fit(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                // Save optimized image
                $image->save(storage_path('app/public/'.$avatarPath), 80);

                $validated['avatar_url'] = Storage::url($avatarPath);
            }

            // Set default status if not provided
            $validated['status'] = $validated['status'] ?? 'pending';

            // Set featured flag
            $validated['is_featured'] = $request->input('is_featured', false);

            // Create testimonial
            $testimonial = Testimonial::create($validated);

            return response()->json([
                'message' => 'Testimonial created successfully',
                'testimonial' => $testimonial,
            ], 201);

        } catch (\Exception $e) {
            // Delete uploaded file if exists
            if (isset($avatarPath)) {
                Storage::disk('public')->delete($avatarPath);
            }

            return response()->json([
                'message' => 'Error creating testimonial',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'role' => 'sometimes|required|string|max:255',
            'company' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
            'rating' => 'sometimes|required|integer|min:1|max:5',
            'industry' => 'sometimes|required|string|max:255',
            'avatar' => 'nullable|image|max:1024',
            'is_featured' => 'boolean',
            'status' => 'in:active,pending,inactive',
        ]);

        try {
            if ($request->hasFile('avatar')) {
                // Delete old avatar if exists
                if ($testimonial->avatar_url) {
                    Storage::disk('public')->delete(
                        str_replace('/storage/', '', $testimonial->avatar_url)
                    );
                }

                // Upload and process new avatar
                $avatar = $request->file('avatar');
                $avatarPath = $avatar->store('testimonials/avatars', 'public');

                $image = Image::make(storage_path('app/public/'.$avatarPath));
                $image->fit(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $image->save(storage_path('app/public/'.$avatarPath), 80);

                $validated['avatar_url'] = Storage::url($avatarPath);
            }

            $testimonial->update($validated);

            return response()->json([
                'message' => 'Testimonial updated successfully',
                'testimonial' => $testimonial,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error updating testimonial',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy(Testimonial $testimonial)
    {
        try {
            // Delete avatar if exists
            if ($testimonial->avatar_url) {
                Storage::disk('public')->delete(
                    str_replace('/storage/', '', $testimonial->avatar_url)
                );
            }

            $testimonial->delete();

            return response()->json([
                'message' => 'Testimonial deleted successfully',
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error deleting testimonial',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    // Additional helper methods
    public function toggleFeatured(Testimonial $testimonial)
    {
        $testimonial->update([
            'is_featured' => ! $testimonial->is_featured,
        ]);

        return response()->json([
            'message' => 'Featured status updated',
            'is_featured' => $testimonial->is_featured,
        ]);
    }

    public function updateStatus(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'status' => 'required|in:active,pending,inactive',
        ]);

        $testimonial->update($validated);

        return response()->json([
            'message' => 'Status updated successfully',
            'status' => $testimonial->status,
        ]);
    }
}
