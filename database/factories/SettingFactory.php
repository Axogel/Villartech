<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'email' =>  'villar88@gmail.com',
            'phone' =>  '+18042391855',
            'address' => 'Address: 19 de Abril Av., 2nd Floor, Office #2-D, San Cristóbal, Venezuela',
            'instagram' => 'https://www.instagram.com/villartechnologies/',
            'facebook' => 'https://www.facebook.com/villartechnologies/',
            'date' =>  'https://www.linkedin.com/company/villartechnologies/',
        ];
    }
}
