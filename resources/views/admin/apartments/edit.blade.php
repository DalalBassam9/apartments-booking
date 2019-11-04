@extends('layouts.backend.app')
@section('content')
<div id="content-wrapper">
<div class="container-fluid">
   <!-- Breadcrumbs-->
   <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Edit Apartment</li>
   </ol>
  @include('layouts.backend.partial.errors')
  @include('layouts.backend.partial.headling')
   <div class="col-lg-6">
      <div class="card">
         <div class="card-header">
            <strong>Edit Apartment</strong>
         </div>
         <div class="create-product">
            <form class="form-horizontal" action="{{ route('admin.apartments.update',$apartment->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
               <div class="card-body card-block">
                  <div class="form-group">
                     <label  class=" form-control-label">Address</label>
                     <input type="text" value="{{$apartment->address}}"  name="address" placeholder="Enter adderss" class="form-control">
                  </div>
                 

                       <div class="form-group">
                           <label for="vat" class=" form-control-label">description</label>
                      	   <textarea  id="summary-ckeditor" placeholder="Enter description"  name="description" rows="5" required=""></textarea>
                          </div>
                  <div class="form-group">
                     <label  class=" form-control-label">price</label>
                     <input type="text" value="{{$apartment->price}}" name="price" placeholder="write price" class="form-control">
                  </div>
                  <div class="row form-group">
                     <div class="col-8">
                        <div class="form-group">
                           <label  class=" form-control-label" >numbers rooms</label>
                           <input type="text" value="{{$apartment->numbers_rooms}}" name="numbers_rooms" placeholder="Write numbers_rooms " class="form-control">
                        </div>
                     </div>
                     <div class="col-8">
                        <div class="form-group">
                           <label  class=" form-control-label">numbers bathrooms</label>
                           <input type="text" placeholder="write bathrooms" value="{{$apartment->numbers_bathrooms}}"  name="numbers_bathrooms" placeholder="Postal Code" class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="col-8">
                     <div class="form-group">
                        <label  class=" form-control-label">floor</label>
                        <input   type="text" value="{{$apartment->floor}}"    name="floor" placeholder="write floor" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="form-group">
                 <div class="col-8">
                  <div class="form-group">
                 <input type="checkbox" name="conditioning" value="1" {{$apartment->conditioning == true ? 'checked' : '' }}>     conditioning<br>
                  </div>
               </div>
               <div class="form-group">
           
                 <input type="checkbox" name="furnished" value="1" {{ $apartment->furnished == true ? 'checked' : '' }}>           furnished
                
               </div>
        
               </div>
               <div class="form-group">
     
               </div>
               <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" name="image" id="image" class="form-control" multi$cars[$x];ple>
                
               </div>
               <button type="submit" type="button" class="btn btn-primary">Edit Apartment </button>
         </div>
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
