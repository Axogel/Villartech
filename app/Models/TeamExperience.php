<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamExperience extends Model
{
    use HasFactory;


    protected $table = 'team_experience';
	protected $primaryKey = 'experience_id';
    public $timestamps = false;

    protected $fillable = [
		'developer_id',
		'experience_company',
		'experience_description',
		'experience_category',
	];

}
