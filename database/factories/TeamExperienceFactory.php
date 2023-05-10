<?php

namespace Database\Factories;
use App\Models\TeamExperience;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamExperience>
 */
class TeamExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    static $increment = 1;

    protected $model = TeamExperience::class;
    public function definition()
    {
        return [
            'developer_id' => self::$increment++,
            'experience_category' => $this->faker->sentence(),
            'experience_description' => $this->faker->paragraph(1, true, 200),
            'experience_date' => $this->faker->date(),
            'experience_company' => $this->faker->sentence(),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date()
        ];
    }
}
