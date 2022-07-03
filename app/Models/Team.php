<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','employee_id','department_id'
    ];
    public function employees(){
        return $this->belongsToMany(Employee::class)->withPivot('team_lead');
    }

    public function departments(){
        return $this->belongsTo(Department::class);
    }
}
