<?php

namespace Database\Seeders;
use App\Models\Portfolio;
use App\Models\PortfolioSkill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portfolios = Portfolio::all();

        foreach ($portfolios as $portafolio) {

            foreach(json_decode($portafolio->skills) as $skill){
                PortfolioSkill::insert( [
                    'portfolio_id' =>  $portafolio->id,
                    'skill_id' =>  $skill,
                    'created_at' => now(),
                    'updated_at' => now(), 
                ]);
            }
        }
        
    }
}
