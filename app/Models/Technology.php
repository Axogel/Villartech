<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Technology extends Model
{
	protected $table = 'technologies';
	protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
		'name',
		'parent_id' ,
		'logo' 
	];
}
