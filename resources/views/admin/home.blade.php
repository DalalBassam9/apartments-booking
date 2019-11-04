   
@extends('layouts.backend.app')
@section('content')

 <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-user o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-users">{{$usersCount}}</i>
                </div>
                <div class="mr-5">Users</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{route('admin.users.index')}}">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
          <i class="fas fa-home">{{$apartmentsCount}}</i>
                </div>
                <div class="mr-5">Apartments</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{route('admin.apartments.index')}}">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
          <i class="fas fa-home">{{$bookingsCount}}</i>
                </div>
                <div class="mr-5">Bookings</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{route('admin.bookings.index')}}">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
    

@endsection
