<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' =>  'PHP',
       ]);

       DB::table('tags')->insert([
        'name' =>  'CSS',
         ]);

        DB::table('tags')->insert([
        'name' =>  'JAVA',
    ]);

    DB::table('tags')->insert([
        'name' =>  'HTML',
    ]);

    DB::table('tags')->insert([
        'name' =>  'TEST',
    ]);
    }
}
