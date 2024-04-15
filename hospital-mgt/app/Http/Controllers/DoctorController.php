<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function doctor()
    {
        return view('user.doctors');
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
