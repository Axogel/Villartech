<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    public function employeeLanguages(){
        return $this->belongsToMany(TeamUser::class, 'language_teams', 'language_id', 'employee_id','language_level');
    }
}
