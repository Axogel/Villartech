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

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class, 'portfolio_id','id');
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class, 'skill_id','id');
    }
}

