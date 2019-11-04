@extends('layouts.backend.app')
@section('content')
<div id="content-wrapper">
   <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
         </li>
         <li class="breadcrumb-item active">Contact</li>
      </ol>
  @include('layouts.backend.partial.headling')
      <!-- DataTables Example -->
      <div class="card mb-3">
         <div class="card-header">
            <i class="fas fa-table"></i>
            Users
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>Message</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($contactMessages as $message)
                     <tr>
                        <td>{{$message->id}}</td>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->phone}}</td>
                        <td>{{$message->message}}</td>
                        <td class="text-center">
                           <form action="{{route('admin.messages.destroy',$message->id)}}" method="POST"  enctype="multipart/form-data">
                              @method('DELETE')
                              @csrf
                              <button type="submit"  class="btn btn-danger btn-delete"><i class="fa fa-trash"></i>
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
