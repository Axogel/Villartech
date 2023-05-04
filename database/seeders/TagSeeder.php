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
        $tags =
        [
            [
                'name' =>  'PHP',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' =>  'CSS',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' =>  'JAVA',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' =>  'HTML',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' =>  'TEST',
                'created_at' => now(),
                'updated_at' => now()
            ] 
            ];
            Tag::insert($tags);

    }
}
