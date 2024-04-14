<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;


class LoginController extends Controller
{
    public function verify_login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = User::where('email', $request->email)->first();

            if (($user->usertype == 1) && Auth::user()->email == $request->email) {
                return redirect()->route('admin.dashboard');
            } else {

                return redirect()->route('user.dashboard');
            }
        }

        return redirect()->route('login')
            ->withInput($request->only('email', 'remember'))
            ->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
    }
}
