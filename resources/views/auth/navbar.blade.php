{{-- @extends("layouts.guest") --}}


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarCenteredExample"
        aria-controls="navbarCenteredExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div
        class="collapse navbar-collapse justify-content-center"
        id="navbarCenteredExample"
      >
      <a  href="Matajer.html"id="matajer"><img src="{{asset('images/logotransparent.svg')}}" style="width: 40px; "></a>
        <!-- Left links -->
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Matajer.html">Home</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="cart.html">My Cart</a>
          </li> --}}
          {{-- <li class="nav-item"> --}}
            {{-- <ol class="login-nav"> --}}
            @if (Route::currentRouteName()=="login")
            <li>
                <a class="nav-link active" aria-current="page" href="{{ route("register") }}">Register</a>
            </li>
            @else
            <li>
                <a class="nav-link active" aria-current="page" href="{{ route("login") }}">Login</a>
            </li>
            @endif
            {{-- <a class="nav-link active" aria-current="page" href="joinUs.html">Join Us </a> --}}
          {{-- </li> --}}
        {{-- </ol> --}}
          <li class="nav-item">
          <div class="btn-group">
            <button type="button" class="btn btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="HairCare.html">Haircare</a>
                <a class="dropdown-item" href="cosmetics.html">Cosmetics</a>
                <a class="dropdown-item" href="medicalCare.html">Healthcare</a>
                <a class="dropdown-item" href="SkinCare.html">Skincare</a>
            </div>
          </div></li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Right elements -->
<div class="d-flex align-items-center">
    <!-- Icon -->
    <a class="text-reset me-3" href="#">
      <i class="fas fa-shopping-cart"></i>
    </a>

    </div>
    <!-- Avatar


    <div class="btn-group">
            <button type="button" class="btn btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Categories</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="HairCare.html">Haircare</a>
                <a class="dropdown-item" href="cosmetics.html">Cosmetics</a>
                <a class="dropdown-item" href="medicalCare.html">Healthcare</a>
                <a class="dropdown-item" href="SkinCare.html">Skincare</a>
            </div>
          </div>

    -->
    {{-- <ol class="login-nav">


        @if (Route::currentRouteName()=="login")
        <li><a class="btn btn-primary" href="{{ route("register") }}">Register</a></li>
        @else
        <li><a class="btn btn-primary" href="{{ route("login") }}"></a></li>


        @endif--}}

{{-- @dd(Route::currentRouteName()) --}}

    {{-- </ol>  --}}


  </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
