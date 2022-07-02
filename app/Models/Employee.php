<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable=[
        'name'
    ];
    public function divisions(){
        return $this->belongsToMany(Division::class);
    }

    public function departments(){
        return $this->belongsToMany(Department::class);
    }

    public function teams(){
        return $this->belongsToMany(Team::class);
    }
}
