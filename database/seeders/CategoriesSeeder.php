<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\CategoryType;

use Illuminate\Support\Facades\DB;



class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categoryType = CategoryType::all()->random();
        $category = 
        [
            [
                'name' =>  'News',
                'created_at' => now(),
                'updated_at' => now(),
                'category_type_id' => $categoryType->id,
            ],
            [
                'name' =>  'Entertaiment',
                'created_at' => now(),
                'updated_at' => now(),
                'category_type_id' => $categoryType->id,
            ],
            [
                'name' =>  'Programming',
                'created_at' => now(),
                'updated_at' => now(),
                'category_type_id' => $categoryType->id,
            ],
            [
                'name' =>  'Learning',
                'created_at' => now(),
                'updated_at' => now(),
                'category_type_id' => $categoryType->id,
            ],
            [
                'name' =>  'Landings',
                'created_at' => now(),
                'updated_at' => now(),
                'category_type_id' => $categoryType->id,
            ],
            [
                'name' =>  'Bootcamps',
                'created_at' => now(),
                'updated_at' => now(),
                'category_type_id' => $categoryType->id,
            ],
            [
                'name' =>  'Virtualization',
                'created_at' => now(),
                'updated_at' => now(),
                'category_type_id' => $categoryType->id,
            ],
            [
                'name' =>  'Operating Systems',
                'created_at' => now(),
                'updated_at' => now(),
                'category_type_id' => $categoryType->id,
            ],
            [
                'name' =>  'Code Writers',
                'created_at' => now(),
                'updated_at' => now(),
                'category_type_id' => $categoryType->id,
            ],
            [
                'name' =>  'Designings',
                'created_at' => now(),
                'updated_at' => now(),
                'category_type_id' => $categoryType->id,
            ],
        ];
        Category::insert($category);
    }
}
