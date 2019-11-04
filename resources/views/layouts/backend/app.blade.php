<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Apartments Booking</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('backend/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
.
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- Page level plugin CSS-->
  <link href="{{asset('backend/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('backend/css/sb-admin.css')}}" rel="stylesheet">

</head>
<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top"  id="sidebarToggle">  

    <a class="navbar-brand mr-1" href="{{route('home')}}">Apartments</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>




		<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">@csrf 
<button type="submit" type="button" class="btn btn-primary">Logout</button>
</form>	</li>
							</ul>
    <!-- Navbar Search -->
    


    <!-- Navbar -->
   <!-- Navbar -->



  </nav>



  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.home')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
 
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.apartments.index')}}">
          <i class="fas fa-home"></i>
          <span>apartment</span></a>
 
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.bookings.index')}}">
          <i class="fas fa-home"></i>
          <span>Bookings</span></a>
      </li>
      
              <li class="nav-item">
        <a class="nav-link"  href="{{route('admin.users.index')}}">
         <i class="fas fa-users"></i>
          <span>User</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link"  href="{{route('admin.messages.index')}}">
         <i class="fas fa-users"></i>
          <span>Contact us messages</span></a>
      </li>

    </ul>
  @yield('content')
 </div>
    <!-- /.content-wrapper -->
     

     
      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Apartments 2019</span>
          </div>
        </div>
      </footer>

   



  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



   <script src="{{asset('backend/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('backend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('backend/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Page level plugin JavaScript-->

  <script src="{{asset('backend/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('backend/datatables/dataTables.bootstrap4.js')}}"></script>


 <!-- Demo scripts for this page-->
  <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
 
  <!-- Custom scripts for all pages-->
  <script src="{{asset('backend/js/sb-admin.min.js')}}"></script>

<script src="{{ asset('backend/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>

</body>

</html>

