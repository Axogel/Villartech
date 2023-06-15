<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class Category extends Model
{
    use HasFactory;

    
    protected $table = 'categories';
	protected $primaryKey = 'id';

    protected $fillable = [
		'name',
        'category_type_id',
	];


    public function categoryType () {
        return $this->belongsTo(CategoryType::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }



}
