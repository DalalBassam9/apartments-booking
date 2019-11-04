<?php

namespace App\Http\Controllers;

use App\ContactUsMessage;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContactUsRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMail;

class ContactUsController extends Controller
{
    public function store(StoreContactUsRequest $request)
    {

       $contact =ContactUsMessage::create(['name'=>$request->name,
                                          'phone'=>$request->phone,
                                          'email'=>$request->email,
                                          'message' =>$request->message]);
    
        Mail::to('dalalbassam2@gmail.com')->send(new ContactUsMail($contact));
       
        return redirect()->route('home')->with('success', ' Thanks for contacting us!');
  
    }
       
     
}
