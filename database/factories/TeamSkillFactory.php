<?php

namespace Database\Factories;
use App\Models\TeamSkill;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamSkill>
 */
class TeamSkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    static $increment = 1;

    protected $model = TeamSkill::class;
    public function definition()
    {
        return [

            'skill_name' => $this->faker->sentence(),
            'skill_percentage' => $this->faker->numberBetween(10, 100),
            'developer_id' => self::$increment++,
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date()
        ];
    }
}
