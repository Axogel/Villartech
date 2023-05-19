<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdminSetting;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_settings =
        [
            'email' =>  'villar88@gmail.com',
            'phone' =>  '+18042391855',
            'address' => 'Address: 19 de Abril Av., 2nd Floor, Office #2-D, San Cristóbal, Venezuela',
            'instagram' => 'https://www.instagram.com/villartechnologies/',
            'facebook' => 'https://www.facebook.com/villartechnologies/',
            'date' =>  'https://www.linkedin.com/company/villartechnologies/',
            'upwork' =>  'https://www.upwork.com/ag/villartechnologies/',
        ];
        

        
        AdminSetting::insert($admin_settings);
    }
}
