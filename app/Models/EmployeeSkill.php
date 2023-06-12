<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSkill extends Model
{
    use HasFactory;
    protected $table = 'employee_skills';
    protected $primaryKey = 'id';

    protected $fillable = [
        'employee_id',
        'skill_id',
    ];

    public function TeamUser()
    {
        return $this->belongsTo(TeamUser::class, 'employee_id','id');
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class, 'skill_id','id');
    }
}
