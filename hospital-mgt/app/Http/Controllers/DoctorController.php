<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function doctor()
    {  
        $doctor = doctor::all();
        
        return view('user.doctors',compact('doctor'));
    }
}
