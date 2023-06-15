<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamUser extends Model
{
    use HasFactory;
    protected $table = 'team_users';
	protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
		'name',
		'email',
		'photo',
		'skills',
		'freelance'
	];
	public function EmployeeCategories(){ 
		return $this->belongsTo(EmployeeCategory::class, 'category_id'); 
	}
	public function EmployeeSkills()
	{
		return $this->belongsToMany(Skill::class, 'employee_skills', 'employee_id', 'skill_id');
	}
	public function EmployeeSkill () {

        return $this->hasMany(EmployeeSkill::class, 'employee_id', 'id');
    }
    public function languages()
    {
        return $this->belongsToMany(Language::class, 'language_teams', 'employee_id', 'language_id')
            ->withPivot('language_level');
    }
	public function LanguageTeam(){

        return $this->hasMany(LanguageTeam::class, 'employee_id', 'id');
    }

	

}


