<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Customer Deshboard</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

     <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>

    <li class="nav-item">
     <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
       <i class="fas fa-th-large"></i>
     </a>
    </li>

    <li class="nav-item dropdown">
     <a class="nav-link" data-toggle="dropdown" href="#">
      <i class="far fa-user"></i>
     </a>

     <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
       <div class="dropdown-divider"></div>
        <a href="{{ route('customer.profile') }}" class="dropdown-item">
         <i class="fas fa-user mr-2"></i> {{ Auth::guard('customer')->user()->name }}
        </a>
        <div class="dropdown-divider"></div>
         <a href="{{ route('customer.logout') }}" class="dropdown-item">
            <i class='fas fa-sign-out-alt'></i>
          <span class="text-muted text-sm">Login Out</span>
         </a>

    </li>

    </ul>
  </nav>
