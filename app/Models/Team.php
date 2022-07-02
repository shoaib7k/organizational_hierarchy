<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','leader','department_id'
    ];
    public function employees(){
        return $this->belongsToMany(Employee::class);
    }

    public function departments(){
        return $this->belongsTo(Department::class);
    }
}
