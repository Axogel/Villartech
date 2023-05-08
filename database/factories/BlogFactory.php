<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name();
        return [
            'title' => $name,
            'description' => $this->faker->paragraph(),
            'image' => 'uploads/images/portfolios/'.$this->faker->file(public_path('images/portfolios'), storage_path('app/public/uploads/images/portfolios/'), false),
            'author' => $this->faker->name(),
            'tags' => '["1"]',
            'slug' => Str::slug($name, '-'),
            'category_id' => 1,
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date()
        ];
    }
}
