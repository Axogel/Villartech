<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamEducation extends Model
{
    use HasFactory;

    protected $table = 'team_educations';
	protected $primaryKey = 'education_id';
    public $timestamps = false;

    protected $fillable = [
		'developer_id',
		'education_title',
		'education_country',
		'education_date',
        'education_description',
	];
}
