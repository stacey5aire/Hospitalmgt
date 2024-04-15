<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    public function index()
    {
        return view("admin.pharmacy.pharmacy");
    }
    public function create()
    {
        return view("admin.pharmacy.add_purchase");
    }

    // public function store(Request $request)
    // {
    // }
}
