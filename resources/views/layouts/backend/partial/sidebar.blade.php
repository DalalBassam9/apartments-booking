 <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
     
         <li class="nav-item active">
          <a class="nav-link" href="">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
 
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.apartments.index')}}">
          <i class="fas fa-home"></i>
          <span>Apartments</span></a>
        </li>
      <li class="nav-item">
          <a class="nav-link" href="{{route('admin.bookings.index')}}">
          <i class="fas fa-home"></i>
          <span>Booking</span></a>
      </li>
      
       <li class="nav-item">
          <a class="nav-link" href="{{route('admin.users.index')}}">
          <i class="fas fa-users"></i>
          <span>User</span></a>
      </li>
</ul>
    </div>
    <!-- /.content-wrapper -->
    <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>


<!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
</body>
