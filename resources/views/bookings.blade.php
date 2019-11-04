@extends('layouts.app')
@section('content')
 
  @include('layouts.headling') 

<!--Property Listing-->
<section class="property-listing">
   <div class="auto-container">
   <div class="mixitup-gallery">
   <!--Heading-->
   <div class="sec-title centered">
      <h2>Bookings {{Auth::user()->name}}</h2>
   </div> 
   <div class="filter-list row clearfix">
      @foreach($bookings as $booking)
      <div class="property-box-two mix all for-sell col-lg-4 col-md-6 col-sm-6 col-xs-12">
         <div class="inner-box">
            <div class="image-box">
               <figure class="image"><a href="property-details.html">
                  <img src="{{ asset('store/apartment/'.$booking->image) }}"  ></a>
               </figure>
               <div class="property-price">${{$booking->apartment->price}} / Month</div>
            </div>
            <div class="lower-content">
               <div class="property-title">
                  <div class="location"><span class="fa fa-map-marker"></span>&nbsp; {{$booking->apartment->address}}.</div>
               </div>
               <div class="prop-info">
                  <ul class="clearfix">
                     <li><strong>{{$booking->apartment->numbers_rooms}} rooms</strong> </li>
                     <li><strong>{{$booking->apartment->numbers_bathrooms}} bathrooms</strong> </li>
                     <li><strong> {{$booking->apartment->conditioning== true ? 'conditioning'  :  'no conditioning'}}</strong> </li>
                     <li><strong>  {{$booking->apartment->furnished == true ? 'furnished' : 'no furnished' }}</strong></li>
                     <li><strong>{{$booking->apartment->floor}} floor</strong> </li>
                  </ul>
               </div>
            </div>
            <div class="bottom-content">
               <div class="price-discount clearfix">
                  <li>
                     Start date of booking  <strong>{{$booking->start_date}}</strong>
                  </li>
                  <li>end date of booking <strong>{{$booking->end_date}}</strong> </li>
               </div>
            </div>
         </div>
      </div>

      @endforeach 

   </div>
</section>
@endsection
