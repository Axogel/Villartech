<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flicker extends Model
{
    use HasFactory;

    protected $table = 'flickers';

    protected $filliable  = [
        'name',
        'image'
       
    ];

}
