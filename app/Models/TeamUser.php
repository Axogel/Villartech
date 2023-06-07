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
		'skills'
	];
	public function EmployeeCategories(){ 
		return $this->belongsTo(EmployeeCategory::class); 
	}
	public function EmployeeSkills(){
        return $this->hasMany(EmployeeSkill::class, 'employee_id', 'id');
    }

}


