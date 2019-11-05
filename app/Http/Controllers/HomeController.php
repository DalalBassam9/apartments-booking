<?php

namespace App\Http\Controllers;

use App\Apartment;
use Carbon\Carbon;
use App\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {    
         $apartments=Apartment::whereDoesntHave('bookings', function ($query) {
                                $query->active()
                                      ->UnfinishedDate();                       
                      })->latest()->paginate(6);
           return view('home',compact('apartments'));
     }

}
