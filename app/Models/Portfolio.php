<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Portfolio extends Model
{

    use HasFactory;
    protected $table = 'portfolios';
    protected $primaryKey = 'id';
    public $timestamps = true;

 
    protected $fillable = [
        'name',
        'description',
        'image',
        'url',
        'skills',
        'slug',
        'client',
    ];
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
    
    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'portfolio_skill');
    }


    public function portfolioSkill () {

        return $this->hasMany(PortfolioSkill::class, 'portfolio_id', 'id');
    }
}
