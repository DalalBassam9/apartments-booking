<?php

namespace App\Http\Controllers\Admin;

use App\Apartment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApartmentRequest;
use App\Http\Requests\UpdateApartmentRequest;
use Illuminate\Support\Facades\Storage;


class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments=Apartment::all();

        return view('admin.apartments.index',compact('apartments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.apartments.create');   

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApartmentRequest  $request )
    {
       //  $path = $request->file('image')->store('images'); 
     $path = Storage::putFile('images', $request->file('image'));

         $apartment= Apartment::create([ 
            'image' => $path ,
            'address' =>$request->address,
            'price'   =>$request->price,
            'description'=>$request->description,
            'numbers_rooms'=>$request->numbers_rooms,
            'numbers_bathrooms'=>$request->numbers_bathrooms,
            'furnished'=>$request->furnished,
            'floor'=>$request->floor,
            'conditioning'=>$request->conditioning
            ]);
 
          return redirect()->route('admin.apartments.index')->with('success','Apartment added successfully ! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        return view('admin.apartments.show',compact('apartment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {
        return view('admin.apartments.edit',compact('apartment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApartmentRequest $request,Apartment $apartment)
    {
        $path = $request->file('image')->store('images'); 
        
         $apartment->update([ 
            'image' => $path,
            'address' =>$request->address,      
            'price'   =>$request->price,
            'description'=>$request->description,
            'numbers_rooms'=>$request->numbers_rooms,
            'numbers_bathrooms'=>$request->numbers_bathrooms,
            'furnished'=>(int)$request->get('furnished'),
            'floor'=>$request->floor,
            'conditioning'=>(int)$request->get('conditioning'),
              
             ]);
         return redirect()->route('admin.apartments.index')->with('success','  apartments update successfully ! '); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment)
    {
        $apartment->delete();
        return redirect()->route('admin.apartments.index')->with('success','Apartment deleted successfully! ');
    }
}
