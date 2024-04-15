<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class HomeController extends Controller
{
    public function home()
    {
        $doctor = doctor::all();
        
        return view('user.home', compact('doctor'));
    }
}
