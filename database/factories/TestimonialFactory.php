<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TestimonialFactory extends Factory
{
    protected $model = Testimonial::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'role' => $this->faker->word(),
            'company' => $this->faker->company(),
            'content' => $this->faker->word(),
            'rating' => $this->faker->word(),
            'avatar' => $this->faker->word(),
            'industry' => $this->faker->word(),
            'is_featured' => $this->faker->boolean(),
            'status' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
