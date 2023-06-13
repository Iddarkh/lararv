<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Booking;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class BookingController extends BaseController
{
    public function createBooking (){
        return view ('booking');
    }
    public function Storebooking(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Email' => 'required',
            'CheckIn' => 'required',
            'CheckOut' => 'required',
            'NumberOffGuest' => 'required',
            'NumberOffRooms' => 'required',
            'TypeOffRooms' => 'required',
            'SpecialRequest' => 'required',
        ]);
    
        $booking = new Booking();
        $booking->Name = $request->Name;
        $booking->Email = $request->Email;
        $booking->CheckIn = date('Y-m-d H:i:s', strtotime($request->CheckIn));
        $booking->CheckOut = date('Y-m-d H:i:s', strtotime($request->CheckOut));
        $booking->NumberOffGuest = $request->NumberOffGuest;
        $booking->NumberOffRooms = $request->NumberOffRooms;
        $booking->TypeOffRooms = $request->TypeOffRooms;
        $booking->SpecialRequest = $request->SpecialRequest;
    
        $booking->save();
     return redirect()->route('create')->with('message', 'Your booking has been sent.');
    }
    
}
