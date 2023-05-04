<?php

namespace Database\Seeders;
use App\Models\Portfolio;
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
  
      if (!file_exists(storage_path('app/public/uploads/images/portfolios'))) {
        mkdir(storage_path('app/public/uploads/images/portfolios'), 0755,true);
      }

      $file = new Filesystem;
      $file->cleanDirectory('storage/app/public/uploads/images/portfolios');

      Portfolio::factory()->count(15)->create();
    }
}
