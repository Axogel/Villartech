<?php

namespace Database\Factories;
use App\Models\TeamEducation;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamEducation>
 */
class TeamEducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    static $increment = 1;

    protected $model = TeamEducation::class;
    public function definition()
    {
 

        return [
            'developer_id' => self::$increment++,
            'education_title' => $this->faker->sentence(),
            'education_date' => $this->faker->paragraph(),
            'education_description' => $this->faker->paragraph(),
            'education_country' => $this->faker->sentence(),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date()
        ];
    }
}
