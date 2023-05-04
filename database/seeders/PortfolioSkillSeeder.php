<?php

namespace Database\Seeders;
use App\Models\Portfolio;
use App\Models\Skill;
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
        $portfolio_skill = Portfolio::find(1);
        $skills = $portfolio_skill->skills;
        
    }
}
