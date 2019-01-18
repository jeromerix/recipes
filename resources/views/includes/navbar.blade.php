<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="{{ URL::to('/images/logo-01.png') }}" alt="Sherlock Food logo"></a>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-utensil-spoon"></i> All recipes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about') }}"><i class="fas fa-info-circle"></i> About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-phone-volume"></i> Contact</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Find recipe" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 search-btn-nav" type="submit"><i class="fas fa-search"></i></button>
      </form>
      <ul class="navbar-nav mr-auto nav-user-login">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-user-plus"></i> Sign up</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i> Login</a>
        </li>
      </ul>
  </div>
</nav>
  
  
  
  {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ URL::to('/images/logo-01.png') }}" alt="Sherlock Food logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cntact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sign up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> --}}