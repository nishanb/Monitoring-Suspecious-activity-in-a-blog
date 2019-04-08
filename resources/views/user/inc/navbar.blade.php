<nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
  <div class="container px-4">
    <a class="navbar-brand" href="/">
      <img src="{{asset("admin_assets/img/brand/blue.png")}}" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-collapse-main">
      <!-- Collapse header -->
      <div class="navbar-collapse-header d-md-none">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="/">
              <img src="{{asset("admin_assets/img/brand/blue.png")}}">
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <!-- Navbar items -->
      <ul class="navbar-nav ml-auto">
        @if(Auth::check())
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="url("/dashboard")">
            <i class="ni ni-single-02"></i>
            <span class="nav-link-inner--text">Profile</span>
          </a>
        </li>
        @if (auth()->user()->isAdmin)
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="url("/admin")">
              <i class="ni ni-planet"></i>
              <span class="nav-link-inner--text">Admin Panel</span>
            </a>
          </li>
        @endif
        @else
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="{{url('/register')}}">
              <i class="ni ni-circle-08"></i>
              <span class="nav-link-inner--text">Register</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="{{url("login")}}">
              <i class="ni ni-key-25"></i>
              <span class="nav-link-inner--text">Login</span>
            </a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
