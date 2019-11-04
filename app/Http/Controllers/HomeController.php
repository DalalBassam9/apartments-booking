<?php

namespace App\Http\Controllers;

use App\Apartment;
use Carbon\Carbon;
use App\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   // public function index()
   // {
      // $apartments=Apartment::whereDoesntHave('booking', function ($query) {
    //$query->where('is_active','=',true)
   //  ->whereDate('end_date','>=',Carbon::today());
   //   })->latest()->paginate(6);
     //   return view('home',compact('apartments'));
    //}
  
   public function index()
    {
       
  $apartments=Apartment::whereDoesntHave('bookings', function ($query) {
                                $query->active()
                                      ->UnfinishedDate(); 
                               
                      })->latest()->paginate(6);
        return view('home',compact('apartments'));
    }
  
















    /**  public function index()
    {
        $apartments= Apartment::whereDoesntHave('bookingInactive', function ($query) {
             $query->where('is_active',false)
             ->whereDate('end_date','<',Carbon::today());
             })->latest()->paginate(6);
        return view('home',compact('apartments'));
    }**/
}
