<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Declaration extends Model
{
    use HasFactory;

    protected $table = 'declarations';
    
    protected $filliable  = [
        'client',
        'client_image',
        'testimony'
       
    ];

    
}
