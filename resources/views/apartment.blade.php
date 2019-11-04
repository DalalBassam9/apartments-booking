@extends('layouts.app')

@section('content')
         <div class="sec-title centered">
            <h2>Apartment Details</h2>
         </div>  
      
  @include('layouts.errors')
  @include('layouts.headling') 
     
         <div class="sidebar-page-container">
            <div class="auto-container">
               <div class="row clearfix">
                  <!--Content Side-->
                  <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <!--Property DEtails-->
                     <section class="property-details">
                        <section id="product_view">
                           <div class="container">
                              <div class="row">
                                 <div class="product_details  ">
                               <img src="{{ asset('storage/images/'.$apartment->image) }}"  width="380px" height="380px">

                                       <div class="col-md-6   col-sm-12 col-xs-12">
                                          <div class="product_information">
                                             <div class="detail-content">
                                                <div class="medium-title">
                                                   <h3>PROPERTY DESCRIPTION</h3>
                                                </div>
                                                <div class="info">
                                                   <ul>
                                                      <li>Price : &ensp;<span class="price">$ {{$apartment->price}}/ Month</span></li>
                                                      <li>
                                                         <div class="location"><span class="fa fa-map-marker"></span>&ensp; {{$apartment->address}}</div>
                                                      </li>
                                                   </ul>
                                                </div>
                                                <div class="text-content">
                                                   <p>{!!$apartment->description!!}</p>
                                         
                                           <h4> -  {{$apartment->conditioning== true ? 'conditioning'  :  'no conditioning'}}</h4>
                                                   <h4> - {{$apartment->furnished == true ? 'furnished' : 'no furnished' }}</h4>
                                                
                                            
</div>
                                                <div class="property-specs">
                                                   <ul class="specs-list">
                                                      <li>
                                                         <div class="icon"><span class="flaticon-double-king-size-bed"></span></div>
                                                         {{$apartment->numbers_rooms}} Rooms
                                                      </li>
                                                      <li>
                                                         <div class="icon"><span class="flaticon-vintage-bathtub"></span></div>
                                                         {{$apartment->numbers_bathrooms}}   Bathrooms
                                                      </li>
                                                      <li>
                                                         <div class="icon"><i class="fas fa-couch"></i></div>
                                                           
                                                   </ul>
                                                </div>
                                                <!--Additional Info-->
                                                <div class="add-info">
                                                   <div class="medium-title">
                                                      <h3>Booking now</h3>
                                                   </div>
                                                   <form action="{{ route('bookings.store') }}" method="post"    enctype="multipart/form-data">
                                                        @csrf   
                                                      <ul class="info-list clearfix">
                                                         <li class="clearfix">
                                                            <div class="pull-left"  style=" margin-left:18px;">Start date</div>
                                                            <div class="pull-right">
                                                               <input type="date" name="start_date"  style="border:1px solid #C0C0C0; padding:3px;">
                                     
                       </div>
                                                            <input type="hidden" name="apartment_id" value="{{$apartment->id}}"  style="border:1px solid #C0C0C0; padding:3px;">
                                
                                                         </li>
                                                         <li class="clearfix">
                                                            <div class="pull-left"  style=" margin-left:18px;">End date</div>
                                                            <div class="pull-right"><input type="date" name="end_date"  style="border:1px solid #C0C0C0; padding:3px;" ></div>
                                                         </li>
                                                      </ul>
                                                      <br><br>
                                                      <div class="button-group"><button type="submit" class="theme-btn btn-style-one">Booking</button></div>
                                                </div>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                       <!--row-->
                                    </div>
                                 </div>
                              </div>
                        </section>
                     </section>
                     </div>
                  </div>
               </div>
            </div>
         </div>

 @endsection

