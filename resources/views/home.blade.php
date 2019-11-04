@extends('layouts.app')

@section('content')
      
  @include('layouts.errors')
  @include('layouts.headling') 

<section class="slider  text-center  hidden-xs">
   <img src="frontend/css/images/timthumb.jpeg" 
      >
   <div class="overlay">
      <div class="container">
         <p id="type">Book now the apartment that appeals to you more. </p>
         <div style="margin-left:300px;margin-top:70px;" class="view-all text-center"><a href="{{route('home')}}" class="theme-btn btn-style-two-book">Book now</a></div>
      </div>
   </div>
</section>
<section class="slider  text-center  hidden-md  hidden-lg  hidden-sm Visible-xs">
   <img src="frontend/css/images/timthumb.jpeg" 
      >
</section>
<!--Property Listing-->
<section class="property-listing">
   <div class="auto-container">
      <div class="mixitup-gallery">
         <!--Heading-->
         <div class="sec-title centered">
            <h2>Latest Apartments</h2>
         </div>
         <div class="filter-list row clearfix">
            @foreach($apartments as $apartment)
            <div class="property-box-two mix all for-sell col-lg-4 col-md-6 col-sm-6 col-xs-12">
               <div class="inner-box">
                  <div class="image-box">
                     <figure class="image">
                 
 <img src="{{\Storage::url($apartment->image)}} ">

                     </figure>
                     <div class="property-price">${{$apartment->price}} / Month</div>
                  </div>
                  <div class="lower-content">
                     <div class="property-title">
                        <div class="location"><span class="fa fa-map-marker"></span>&nbsp; {{$apartment->address}}.</div>
                     </div>
                     <div class="prop-info">
                        <ul class="clearfix">
                           <li><strong>{{$apartment->numbers_rooms}} rooms</strong> </li>
                           <li><strong>{{$apartment->numbers_bathrooms}} bathrooms</strong> </li>
                           <li><strong>{{$apartment->furnished == true ? 'furnished' : 'no furnished'}}</strong> </li>
                        </ul>
                     </div>
                  </div><br>
                  <div class="bottom-content">
                   
      <div class="link"><a href="{{route('apartments.show',$apartment->id)}}">View Details <span class="fa fa-angle-right"></span></a></div>
  
                  </div>
               </div>
            </div>
            @endforeach 
         </div>
      </div>
   </div>
</section>
<div class="contact-section">
   <div class="auto-container">
      <div class="sec-title centered">
         <h2>Contact US</h2>
      </div>
      <div class="outer-box clearfix">
         <!--Form Column-->
         <div class="form-column col-md-8 col-sm-12 col-xs-12">
            <div class="inner">
               <div class="title">
                  <h2>Send Us Message</h2>
               </div>
               <!-- Contact Form -->
               <div class="contact-form">
                  <form class="form-horizontal" action="{{route('contact.store')}}" method="POST" enctype="multipart/form-data">
                     @csrf 
                     <div class="row clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                           <input type="text" name="name" placeholder="Name" value="{{old('name')}}">
                               <div>{{ $errors->first('name') }} </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                           <input type="email" name="email" placeholder="Email Address" value="{{old('email')}}">
                           <div>{{ $errors->first('email') }} </div>
                        </div>
                           <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                           <input type="text" name="phone" placeholder="phone" value="{{old('phone')}}" >
                           <div>{{ $errors->first('phone') }} </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                           <textarea name="message" placeholder="Message">{{old('message')}}</textarea>
                            <div>{{ $errors->first('message') }} </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                           <button class="theme-btn btn-style-one" type="submit" name="submit-form">Send Message</button>
                        </div>
                     </div>
                  </form>
               </div>
               <!--End Contact Form -->
            </div>
         </div>
         <!--Info Column-->
         <div class="info-column col-md-4 col-sm-12 col-xs-12">
            <div class="inner">
               <div class="title">
                  <h2>Contact Information</h2>
               </div>
               <ul class="contact-info">
                  <li>
                     <div class="icon-box"><span class="fa fa-map-marker"></span></div>
                     Amman-Jordan  <br> 
                  </li>
                  <li>
                     <div class="icon-box"><span class="fa fa-phone"></span></div>
                     0797381979  <br>
                  </li>
                  <li>
                     <div class="icon-box"><span class="fa fa-envelope"></span></div>
                     dalalBassam2@gmail.com
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
