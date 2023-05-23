<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\AdminSetting;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = 
        [
            'name' => 'Jose Manuel',
            'email' => 'villar88@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('101088josemanuel'),
            'created_at' => now(),
            'updated_at' => now()
        ];

  

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
        
        User::insert($user);
        AdminSetting::insert($admin_settings);

    }
}
