<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','employee_id'
    ];

    public function departments(){
        return $this->hasMany(Department::class);
    }
    public function employees(){
        return $this->belongsToMany(Employee::class)->withPivot('division_lead');
    }
}
