<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Doctor;


class DoctorController extends Controller
{
    public function doctor()
    {
        $doctor = doctor::all();
        return view('user.doctors', compact('doctor'));
    }
    public function doctorList(Request $request)
    {
        return view('admin.doctor.doctor');
    }

    public function addDoctor(Request $request)
    {
        return view('admin.doctor.doctor');
        // return view();
    }
}
