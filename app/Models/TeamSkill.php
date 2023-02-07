<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamSkill extends Model
{
    use HasFactory;

    protected $table = 'team_skills';
	protected $primaryKey = 'skill_id';
    public $timestamps = false;

    protected $fillable = [
		'skill_id',
		'developer_id',
		'skill_name',
		'skill_percentage',
	];
}
