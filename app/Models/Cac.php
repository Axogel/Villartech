<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cac extends Model
{
    use HasFactory;

    
    protected $table = 'cacs';
	protected $primaryKey = 'id';

    protected $fillable = [
		'name',
	];
}
