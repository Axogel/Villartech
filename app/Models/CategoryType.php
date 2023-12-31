<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryType extends Model
{
    use HasFactory;

    protected $table = 'category_types';
	protected $primaryKey = 'id';

    protected $fillable = [
		'name',
	];



    public function category()
{
    return $this->hasMany(Category::class);
}

}
