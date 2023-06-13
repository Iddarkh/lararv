<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use app\model\Booking;

class Controller extends BaseController
{
    public function create (){
        return view ('create');
    }
    public function booking (Request $request){
        $request->validate([
            'Name'=>'required',
            'Email'=>'required',
            'CheckIn'=>'required',
            'CheckOut'=>'required',
            'NumberOffGuest'=>'required',
            'NumberOffRooms'=>'required',
            'TypeOffRooms'=>'required',
            'specialRequest'=>'required',
        ]);
        $booking=new booking() ;
        $booking-> Name = $request-> Name ;
        $booking-> Email = $request-> Email ;
        $booking-> CheckIn = $request-> CheckIn ;
        $booking-> CheckOut = $request-> CheckOut ;
        $booking-> umberOffGuest = $request-> umberOffGuest ;
        $booking-> TypeOffRooms = $request-> TypeOffRooms ;
        $booking-> specialRequest = $request-> specialRequest ;
        
        $booking->save();
        return redirect()->rout('booking')->with('sucsess','booking was don');
    }
}
