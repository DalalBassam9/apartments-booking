@extends('layouts.backend.app')
@section('content')
<div id="content-wrapper">
   <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
         </li>
         <li class="breadcrumb-item active">Bookings</li>
      </ol>
  @include('layouts.backend.partial.headling')
      <!-- DataTables Example -->
      <div class="card mb-3">
         <div class="card-header">
            <i class="fas fa-table"></i>
             Bookings
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>start date</th>
                        <th>End date</th>
                        <th>Active</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($bookings as $booking )
                     <tr>
                        <td> {{$booking->id}}</td>
                        <td>{{$booking->start_date}}</td>
                        <td>{{$booking->end_date}}</td>
                        <td>
                           @if($booking->is_active == true)
                           <span class="badge bg-blue">active</span>
                           @else
                           <span class="badge bg-pink">Pending</span>
                           @endif
                        </td>
                       <td>
                        <a href="{{route('admin.bookings.show',[$booking->id])}}" class="btn btn-del waves-effect">
                        <i class="fa fa-view"></i>
                        Details Booking
                        </a>
                          <a href="{{route('admin.bookings.edit',$booking->id)}}" class="btn btn-info waves-effect">
                           <i class="fa fa-edit"></i>
                           </a>
                        <br>
      
                        <form action="{{route('admin.bookings.destroy',$booking->id)}}" method="POST">
                           {{ csrf_field() }}
                           {{ method_field('DELETE') }}
                           <button class="btn btn-danger btn-delete"><i class="fa fa-trash"></i>
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
