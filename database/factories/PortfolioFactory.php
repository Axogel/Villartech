<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


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
        $name = $this->faker->sentence();
        $slug = Str::slug($name);
        return [
            'name' => $name,
            'description' => $this->faker->paragraph(),
            'image' => 'storage/uploads/images/portfolios/'.$this->faker->file(public_path('images/portfolios'), storage_path('app/public/storage/uploads/images/portfolios/'), false),
            'url' => $this->faker->url(),
            'skills' => json_encode([strval(rand(1,14)),strval(rand(1,14))]),
            'slug' => $slug,
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date()
        ];
    }
}
