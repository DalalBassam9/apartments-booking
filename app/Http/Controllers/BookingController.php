<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\StoreBookingRequest;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
  
        $bookings=auth()->user()->bookings()->active()->UnfinishedDate()->get();

        return view('bookings',compact('bookings'));

        
    }
    
    public function  store(StoreBookingRequest $request) 
    {
       auth()->user()->bookings()->create(['end_date'=>$request->end_date,
                                         'start_date'=>$request->start_date,
                                        'apartment_id'=>$request->apartment_id]);

          
       return redirect()->route('bookings.index')->with('success','Done Booking  successfully need active');

    }
            


}
