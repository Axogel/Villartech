<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamEducation extends Model
{
    use HasFactory;

    protected $table = 'team_educations';
	protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
		'developer_id',
		'title',
		'country',
		'date',
        'description',
	];
}
