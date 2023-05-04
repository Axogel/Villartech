<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryType;
use Illuminate\Support\Facades\DB;


class CategoryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_types = 
        [
            'name' =>  'Landing',
            'created_at' => now(),
            'updated_at' => now(), 
        ];
        CategoryType::insert($category_types);
    }
}
