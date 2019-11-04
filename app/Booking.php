<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['start_date','end_date','is_active','user_id','apartment_id'];

    public function user()
    {
        return $this->belongsTo('\App\User');
    }

     public function  apartment()
     {
         return $this->belongsTo('\App\Apartment');
     }
     
    public function scopeActive($query)
    {
        return $query->where('is_active',true);

    }

    public function scopeInactive($query)
    {
        return $query->where('is_active',false);

    }
   
    public function scopeUnfinishedDate($query)
    {
        return $query->whereDate('end_date','>=',today());
    }

  public function scopefinishedDate($query)
  {
        return $query->whereDate('end_date','<',Carbon::today());
  }

}
