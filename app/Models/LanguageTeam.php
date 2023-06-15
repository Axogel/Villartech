<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class languageTeam extends Model
{
    use HasFactory;
    public function employee()
    {
        return $this->belongsTo(TeamUser::class, 'employee_id','id');
    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id','id');
    }
}
