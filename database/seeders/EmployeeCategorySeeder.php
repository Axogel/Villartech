<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EmployeeCategory;
use Illuminate\Support\Facades\DB;


class EmployeeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee_categories = 
        [
            'name' =>  'PHP-FULL-STACK',
            'description' => 'FULL STACK DEVELOMENT',
            'created_at' => now(),
            'updated_at' => now(), 
        ];
        EmployeeCategory::insert($employee_categories);
    }
}
