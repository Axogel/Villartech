<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            TeamUserSeeder::class,
            TagSeeder::class,
            CategoryTypeSeeder::class,
            CategoriesSeeder::class,
            TagSeeder::class,
            PortfoliosTableSeeder::class
        ]);
    }
}
