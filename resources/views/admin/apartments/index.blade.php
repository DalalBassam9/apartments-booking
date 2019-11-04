@extends('layouts.backend.app')
@section('content')
<div id="content-wrapper">
   <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
         </li>
         <li class="breadcrumb-item active">Apartments</li>
      </ol>
  
  @include('layouts.backend.partial.headling')
      <!-- DataTables Example -->
      <div class="card mb-3">
         <div class="card-header">
            <i class="fas fa-table"></i>
            Apartment
         </div>
         <a class="btn btn-primary " href="{{route('admin.apartments.create')}}">
         Add New apartment
         </a>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Address</th>
                        <th>description</th>
                        <th>price</th>
                        <th>image</th>
                        <th>numbers rooms</th>
                        <th>numbers bathrooms</th>
                        <th>furnished</th>
                        <th>floor</th>
                        <th>conditioning</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($apartments as $apartment )
                     <tr>
                        <td> {{$apartment->id}}</td>
                        <td>{{$apartment->address}}</td>
                        <td>{{$apartment->description}}</td>
                        <td>{{$apartment->image}}</td>
                        <td>{{$apartment->price}}</td>
                        <td>{{$apartment->numbers_rooms}}</td>
                        <td>{{$apartment->numbers_bathrooms}}</td>
                        <td>{{$apartment->furnished == true ? 'furnished' : 'no furnished' }}</td>
                        <td>{{$apartment->floor}}</td>
                        <td>{{$apartment->conditioning == true ? 'conditioning' : 'no conditioning' }}</td>
                        <td class="text-center">
                           <a href="{{route('admin.apartments.edit',$apartment->id)}}" class="btn btn-info waves-effect">
                           <i class="fa fa-edit"></i>
                           </a>
                           <form action="{{route('admin.apartments.destroy',$apartment->id)}}" method="POST">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <button type="submit" class="btn btn-danger btn-delete"><i class="fa fa-trash"></i>
                              </button>
                           </form>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <!-- /.container-fluid -->
</div>
<!-- /.content-wrapper -->
</div>
<!-- /#wrapper -->
@endsection
