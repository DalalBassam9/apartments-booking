@extends('layouts.backend.app')
@section('content')
<div id="content-wrapper">
<div class="container-fluid">
<!-- Breadcrumbs-->
<ol class="breadcrumb">
   <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
   </li>
   <li class="breadcrumb-item active"> Add Apartments</li>
</ol>

  @include('layouts.backend.partial.errors')
  @include('layouts.backend.partial.headling')
<div class="col-lg-6">
   <div class="card">
      <div class="card-header">
         <strong>Create Apartment</strong>
      </div>
      <div class="create-product">
         <form class="form-horizontal" action="{{ route('admin.apartments.store') }}" method="post" enctype="multipart/form-data">
            @csrf 
            <div class="card-body card-block">
               <div class="form-group">
                  <label class=" form-control-label">Address</label>
                  <input type="text"  name="address" placeholder="Enter Address house" class="form-control">
               </div>
                        <div class="form-group">
                           <label for="vat" class=" form-control-label">description</label>
                      	   <textarea  id="summary-ckeditor" placeholder="Enter description"  name="description" rows="5" required=""></textarea>
                          </div>

 
               <div class="form-group">
                  <label  class=" form-control-label">price</label>
                  <input type="text" id="street" name="price" placeholder="Enter Price" class="form-control">
               </div>
               <div class="row form-group">
                  <div class="col-8">
                     <div class="form-group">
                        <label for="city" class=" form-control-label">numbers rooms</label>
                        <input type="text"  name="numbers_rooms" placeholder="Enter numbers room" class="form-control">
                     </div>
                  </div>
                  <div class="col-8">
                     <div class="form-group">
                        <label  class=" form-control-label">numbers bathrooms</label>
                        <input type="text" placeholder="Enter numbers bathrooms" name="numbers_bathrooms" placeholder="Postal Code" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="col-8">
                  <div class="form-group">
                     <label  class=" form-control-label">floor</label>
                     <input type="text" name="floor" placeholder="floor" class="form-control">
                  </div>
               </div>
               <div class="col-8">
                  <div class="form-group">
                 <input type="checkbox" name="conditioning" value="1"> conditioning<br>
                  </div>
               </div>
              <div class="col-8">
               <div class="form-group">
           
                 <input type="checkbox" name="furnished" value="1"> furnished<br>
                
               </div>
              </div>
               <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" name="image" id="image" class="form-control">
               </div>
            <button type="submit" type="button" class="btn btn-primary">Add Apartments</button>
         </form>
      </div>
   </div>
</div>
</body>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
   CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection
