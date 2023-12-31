<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{

    use HasFactory;

    protected $table = 'skills';
	protected $primaryKey = 'id';

    protected $fillable = [
		'name',
	];



    public function portfolios()
    {

            return $this->belongsToMany(Portfolio::class, 'portfolio_skill', 'portfolio_id', 'skill_id');

    }
    public function employeeSkills()
    {

            return $this->belongsToMany(Portfolio::class, 'portfolio_skill', 'portfolio_id', 'skill_id');

    }
    public function teamSkills(){
        return $this->belongsToMany(TeamUser::class, 'employee_skills', 'skill_id', 'employee_id');
    }

}
