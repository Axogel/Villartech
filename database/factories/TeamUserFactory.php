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
            'skills' => $this->faker->name(),
            'status' => 1,
            'age' => rand(18,30),
            'address' => $this->faker->name(),
            'team_presentation' => $this->faker->text(),
            'cv_link' => $this->faker->text(),
            'residence' => $this->faker->name(), 
            'freelance' => $this->faker->name(), 
            'team_category' => 'PHP-FULL-STACK',
            'work_time' => rand(10,40),
            'overview' => $this->faker->text(),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
            'photo' => 'uploads/images/teams/'.$this->faker->file(public_path('images/teams'), storage_path('app/public/uploads/images/teams/'), false),

        ];
    }
}
