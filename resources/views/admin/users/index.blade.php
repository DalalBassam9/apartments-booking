@extends('layouts.backend.app')
@section('content')
<div id="content-wrapper">
   <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
         </li>
         <li class="breadcrumb-item active">User</li>
      </ol>
      @if(Session::has('error'))
      <div class="alert alert-danger" role="alert">>
         <button type="button" class="close" data-dismiss="alert">×</button> 
         <strong>{!! session('error') !!}</strong>
      </div>
      @endif   
      @if(Session::has('success'))
      <div class="alert alert-success alert-block">
         <button type="button" class="close" data-dismiss="alert">×</button> 
         <strong>{!! session('success') !!}</strong>
      </div>
      @endif
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
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($users as $user)
                     <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td class="text-center">
                           <form action="{{route('admin.users.destroy',$user->id)}}" method="POST"  enctype="multipart/form-data">
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
