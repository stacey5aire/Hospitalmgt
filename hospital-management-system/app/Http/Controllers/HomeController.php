<?php
namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth; 

class HomeController extends Controller

{
    public function redirect()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            if (Auth::user()->usertype == '0') {
                // Regular user, redirect to dashboard
                return view('user.home');
            } else {
                // Admin user, redirect to admin home
                return view('admin.home');
            }
        } else {
            // User is not authenticated, redirect back
            return redirect()->back();
        }
    }

    public function index(){
          return view('user.home');
    }
}
