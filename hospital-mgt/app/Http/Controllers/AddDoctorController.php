<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddDoctorController extends Controller
{
    public function index()
    {
        return view("admin.doctor.add_doctor");
    }
    public function edit()
    {
        return view("admin.doctor.edit_doctor");
    }
}
