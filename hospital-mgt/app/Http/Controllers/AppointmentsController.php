<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AppointmentsController extends Controller
{
    public function appointments()
    {
        $userid = Auth::user()->id;

        $appoint = Appointments::where('user_id', $userid)->get();
        
        return view('user.appointment.myappointment', compact('appoint'));
    }

    public function cancel_appoint($id)
    {
        $appoint = Appointments::find($id);
        $appoint->delete();

        return redirect()->back();
    }
}
