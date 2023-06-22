<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable = [
        'name',
        'email',
        'number',
        'interest',
        'budget',
        'message',
        'linkedin',
        'attachment',
        'about_us',
    ];

    public function getAttachmentUrlAttribute()
    {
        if (!empty($this->attachment)) {
            return storage_path('app/attachments/' . $this->attachment);
        }
        return null;
    }
}
