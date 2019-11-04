<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Apartment;
use App\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function index()
   {
       $usersCount = User::count();
       $apartmentsCount = Apartment::count();
       $bookingsCount = Booking::count();
     
       return view('admin.home',compact('usersCount','apartmentsCount','bookingsCount'));
   }
}
