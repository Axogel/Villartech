<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;


class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';
	protected $primaryKey = 'id';

   

    protected $fillable = [
		'name',
	];

	public function posts()
    {

        
        return $this->belongsToMany(Blog::class);
    }
}
