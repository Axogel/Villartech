<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use Illuminate\Filesystem\Filesystem;


class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!file_exists(storage_path('app/public/uploads/images/portfolios'))) {
            mkdir(storage_path('app/public/uploads/images/portfolios'), 0755,true);
          }
    
          $file = new Filesystem;
          $file->cleanDirectory('storage/app/public/uploads/images/portfolios');
    
          Blog::factory()->count(5)->create();
        
    }
}
