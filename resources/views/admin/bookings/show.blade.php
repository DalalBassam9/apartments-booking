@extends('layouts.backend.app')
@section('content')
<div id="content-wrapper">
<div class="container-fluid">
   <!-- Breadcrumbs-->
   <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Tables</li>
   </ol>

   <!-- DataTables Example -->
   <div class="card mb-3">
      <div class="card-header">
         <i class="fas fa-table"></i>
         Booking
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered"  width="100%" cellspacing="0">
               <thead>
                  <h3>Date Booking</h3>
                  <tr>
                     <th>ID</th>
                     <th>start date</th>
                     <th>End date</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>{{$booking->id}}</td>
                     <td>{{$booking->start_date}}</td>
                     <td>{{$booking->end_date}}</td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="table-responsive">
            <table class="table table-bordered"  width="100%" cellspacing="0">
               <thead>
                  <h3>Apartment Details</h3>
               <thead>
                  <tr>
                     <th>address</th>
                     <th>description</th>
                     <th>price</th>
                     <th>numbers rooms</th>
                     <th>numbers bathrooms</th>
                     <th>furnished</th>
                     <th>floor</th>
                     <th>conditioning</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>{{$booking->apartment->address}}</td>
                     <td>{{$booking->apartment->description}}</td>
                     <td>{{$booking->apartment->price}}</td>
                     <td>{{$booking->apartment->numbers_rooms}}</td>
                     <td>{{$booking->apartment->numbers_bathrooms}}</td>
                     <td>{{$booking->apartment->furnished == true ? 'furnished' : 'not furnished'  }}</td>
                     <td>{{$booking->apartment->floor}}</td>
                     <td>{{$booking->apartment->conditioning == true ? 'conditioning' : 'no conditioning' }}</td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
               <h3> users Details</h3>
               <thead>
                  <tr>
                     <th>name </th>
                     <th>email </th>
                     <th>phone</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>{{$booking->user->name}}</td>
                     <td>{{$booking->user->email}}</td>
                     <td>{{$booking->user->phone}}</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
      <!-- /.container-fluid -->
   </div>
   <!-- /.content-wrapper -->
</div>
<!-- /#wrapper -->
@endsection
