<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeCategory extends Model
{
    use HasFactory;
    protected $table = 'employee_categories';
    protected $primaryKey = 'id';
    protected $filliable  = [
        'name',
        'description'
       
    ];
    public function TeamCategory()
    {
        return $this->hasMany(TeamUser::class);
    }
}
