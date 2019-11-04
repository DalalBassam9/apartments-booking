@extends('layouts.backend.app')
@section('content')
<div id="content-wrapper">
<div class="container-fluid">
   <!-- Breadcrumbs-->
   <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Edit Booking</li>
   </ol>
  @include('layouts.backend.partial.errors')
  @include('layouts.backend.partial.headling') 
   <div class="col-lg-6">
      <div class="card">
         <div class="card-header">
            <strong>Edit Booking</strong>
         </div>
         <div class="create-product">
            <form class="form-horizontal" action="{{ route('admin.bookings.update',$booking->id) }}" method="post" enctype="multipart/form-data">
               @csrf
               @method('PUT')
               <div class="card-body card-block">
                  <div class="form-group">
                     <label  class="form-control-label">Start Date</label>
                     <input type="date" value="{{$booking->start_date}}"  name="start_date" placeholder="Enter adderss" class="form-control">
                  </div>
                  <div class="form-group">
                     <label class="form-control-label">End Date</label>
                     <input type="date" value="{{$booking->end_date}}" name="end_date" placeholder="Enter adderss" class="form-control">
                  </div>
               </div>
                  <div class="form-group">
                       
                   <input type="checkbox" name="is_active" value="1" {{$booking->is_active == true ? 'checked' : '' }}>
                            <label class="form-control-label">Active</label>       
                  </div>
               </div>
           <div class="form-group">
                  
                     <input type="hidden" value="{{$booking->user_id}}" name="user_id" placeholder="Enter adderss" class="form-control">
                  </div>
    <div class="form-group">
                  
                     <input type="hidden" value="{{$booking->apartment_id}}" name="apartment_id" placeholder="Enter adderss" class="form-control">
                  </div>
               <button type="submit" type="button" class="btn btn-primary">Edit Booking</button>
         </div>
         </form>
      </div>
   </div>
</div>
</body>
@endsection
