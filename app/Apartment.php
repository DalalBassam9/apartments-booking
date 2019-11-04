<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;


class Apartment extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =        ['address','image','images','description','price','numbers_rooms','numbers_bathrooms','furnished','floor','conditioning'];   
                     

   public function bookings()
   {
       return $this->hasMany('App\Booking');
   }
   

}
