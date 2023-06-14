<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;



class Blog extends Model
{
    use HasFactory;


   
    protected $table = 'blogs';
	protected $primaryKey = 'id';

    protected $fillable = [
		'title',
        'description',
        'image',
        'author',
        'date',
        'category_id',
        'tags',
        'slug',
	];



    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
    


    public function tags()
    {        
        return $this->belongsToMany(Tag::class, 'blog_tag');
    }

    public function blogTag()
    {
        return $this->hasMany(BlogTag::class, 'blog_id', 'id');
    }
}
