<?php

namespace Database\Seeders;
use App\Models\portfolio;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Filesystem\Filesystem;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      portfolio::factory(5)->create();
      if (!file_exists(storage_path('app/public/uploads/images'))) {
        mkdir(storage_path('app/public/uploads/images'), 0755,true);
    } 

    $file = new Filesystem;
    $file->cleanDirectory('storage/app/public/uploads/images');

    portfolio::factory()->count(5)->create();
}
}
