<?php

namespace App\Http\Controllers\Admin;

use App\ContactUsMessage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactMessages=ContactUsMessage::all();
        
        return view('admin.contact.index',compact('contactMessages'));
    }


     public function destroy(ContactUsMessage $contactUsMessage)
     {
        $contactUsMessage->delete();

        return redirect()->route('admin.messages.index')->with('success','contactUsMessage Deleted successfully! ');
     }
}
