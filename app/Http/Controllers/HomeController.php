<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $divisions=Division::all();

        return view('home',['divisions'=> $divisions]);
    }
}
