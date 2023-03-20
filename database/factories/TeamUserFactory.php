<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamUser>
 */
class TeamUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'id_name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'email' =>  $this->faker->email(),
            'skills' => $this->faker->text(),
            'status' => 1,
            'age' => rand(18,30),
            'address' => $this->faker->text(),
            'team_presentation' => $this->faker->text(),
            'cv_link' => $this->faker->text(),
            'residence' => $this->faker->text(), 
            'freelance' => $this->faker->text(), 
            'team_category' => 'PHP-FULL-STACK',
            'work_time' => rand(10,40),
            'overview' => $this->faker->text(),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
            'photo' => 'images/'.$this->faker->file(public_path('images'), storage_path('app/public/uploads/images/'), false),

        ];
    }
}
