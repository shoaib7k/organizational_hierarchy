<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','employee_id','division_id'
    ];

    public function employees(){
        return $this->belongsToMany(Employee::class);
    }
    public function divisions(){
        return $this->belongsTo(Division::class);
    }
    public function teams(){
        return $this->hasMany(Team::class);
    }
}
