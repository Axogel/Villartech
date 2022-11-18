<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Portfolio extends Model
{
	protected $table = 'portfolios';
	protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
		'name',
		'description' ,
		'image' ,
		'url' ,
		'client' 
	];
}
