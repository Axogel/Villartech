<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioSkill extends Model
{
    use HasFactory;

    protected $table = 'portfolio_skill';
	protected $primaryKey = 'id';

    protected $fillable = [
		'portfolio_id',
        'skill_id',
	];




    // public function portfolios()
    // {
    //     return $this->belongsToMany(Portfolio::class, 'portfolio_skill')->withTimestamps();
    // }
    // public function skills()
    // {
    //     return $this->belongsToMany(Skill::class, 'portfolio_skill')->withTimestamps();
    // }
}
