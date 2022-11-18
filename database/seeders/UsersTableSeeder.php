<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
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
        DB::table('users')->insert([
            'name' => 'Admin Admin',
            'email' => 'admin@argon.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()

            
        ]);

        DB::table('admin_settings')->insert([
            'email' =>  'villar88@gmail.com',
            'phone' =>  '+18042391855',
            'address' => 'Address: 19 de Abril Av., 2nd Floor, Office #2-D, San Cristóbal, Venezuela',
            'instagram' => 'https://www.instagram.com/villartechnologies/',
            'facebook' => 'https://www.facebook.com/villartechnologies/',
            'date' =>  'https://www.linkedin.com/company/villartechnologies/',
       ]);
    }
}
