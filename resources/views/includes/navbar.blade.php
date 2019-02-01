<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href=" {{ url('/' ) }} "><img src="{{ URL::to('/images/logo-01.png') }}" alt="Sherlock Food logo"></a>
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
          <a class="nav-link" href="{{ url('/contact') }}"><i class="fas fa-phone-volume"></i> Contact</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" action="{{route('search')}}" method="GET">
        {{ csrf_field() }}
        <input class="form-control mr-sm-2" type="text" placeholder="Find recipe" aria-label="Search" name="search">
        <button class="btn btn-outline-success my-2 my-sm-0 search-btn-nav" type="submit"><i class="fas fa-search"></i></button>
      </form>
      <ul class="navbar-nav mr-auto nav-user-login">
        @if (Auth::check())
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/user') }}"><i class="fas fa-user-circle"></i> My profile</a>
        </li>
        @else
        <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Sign up</a>
        </li>
        @endif 
        @if (Auth::check())
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf
          </form>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a>
        </li>
        @endif
      </ul>
  </div>
</nav>
