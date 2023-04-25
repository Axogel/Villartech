<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'image' => 'images/'.$this->faker->file(public_path('images'), storage_path('app/public/uploads/images/'), false),
            'image' => 'uploads/images/'.$this->faker->file(public_path('images'), storage_path('app/public/uploads/images/'), false),
            'url' => $this->faker->paragraph(),
            'skills' => $this->faker->paragraph(),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date()
        ];
    }
}
