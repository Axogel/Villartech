<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminSetting extends Model
{
    use HasFactory;
    protected $table = 'admin_settings';

    protected $filliable  = [
        'email',
        'phone',
        'date',
        'facebook',
        'instagram',
        'address'
    ];
    
}
