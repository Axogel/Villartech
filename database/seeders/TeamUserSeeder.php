<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TeamUser;
use Illuminate\Filesystem\Filesystem;

class TeamUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeamUser::factory()->count(10)->create();

        if (!file_exists(storage_path('app/public/uploads/images'))) {
            mkdir(storage_path('app/public/uploads/images'), 0755,true);
        } //create a folder

        $file = new Filesystem;
        $file->cleanDirectory('storage/app/public/uploads/images');

    }
}
