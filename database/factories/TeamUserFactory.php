<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
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
        $name = $this->faker->sentence();
        $slug = Str::slug($name);
        return [
            'name' =>  $name,
            'id_name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'email' =>  $this->faker->email(),
            'skills' => json_encode([strval(rand(1,14)),strval(rand(1,14))]),
            'status' => 1,
            'slug' => $slug,
            'age' => rand(18,30),
            'address' => $this->faker->name(),
            'team_presentation' => $this->faker->text(),
            'cv_link' => $this->faker->text(),
            'residence' => $this->faker->name(), 
            'freelance' => $this->faker->boolean(),
            'category_id' => '1',
            'work_time' => rand(10,40),
            'overview' => $this->faker->text(),
           'languages'=> '1',
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
            'photo' => 'uploads/images/teams/'.$this->faker->file(public_path('images/teams'), storage_path('app/public/uploads/images/teams/'), false),

        ];
    }
}
