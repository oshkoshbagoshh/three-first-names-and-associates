<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Sarah Johnson',
                'role' => 'Marketing Director',
                'company' => 'TechCorp Solutions',
                'content' => 'Working with this team has transformed our digital presence. Their attention to detail and innovative solutions helped us achieve a 150% increase in user engagement within just three months.',
                'rating' => 5,
                'industry' => 'Technology',
                'is_featured' => true,
                'status' => 'active',
            ],
            [
                'name' => 'Michael Chen',
                'role' => 'CEO',
                'company' => 'Innovate Industries',
                'content' => 'The level of professionalism and expertise demonstrated by the team is outstanding. They didn\'t just build a website; they created a digital ecosystem that perfectly represents our brand identity.',
                'rating' => 5,
                'industry' => 'Manufacturing',
                'is_featured' => true,
                'status' => 'active',
            ],
            // Add more testimonials as needed
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
