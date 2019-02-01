<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="footer-logo text-center">
        <img src="{{ URL::to('/images/logo-footer.png') }}">
      </div>
    </div>
    <div class="col-md-6 offset-md-2 col-sm-8 text-right footer-col">
      <div class="footer-links-wrapper">
        <ul class="footer-links">
          <li><a href="{{ url('/') }}">HOME</a></li>
          <li><a href="{{ url('/about') }}">ABOUT</a></li>
          <li><a href="{{ url('/contact') }}">CONTACT</a></li>
          @if(Auth::Check())
          <li><a href="{{ url('/user') }}">MY PROFILE</a></li>
          @else
          <li><a href="{{ route('register') }}">SIGN UP</a></li>
          @endif
          @if(Auth::check())
          <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('LOGOUT') }}</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf
          </form>
          </li>
          @else
          <li><a href="{{ route('login') }}">LOGIN</a></li>
          @endif
        </ul>
        <hr>
        <div class="">
          <div class="pull-left">Sherlock-Food</div>
          <div class="pull-right">© CodeGorilla Leeuwarden 2019</div>
        </div>
      </div>   
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center">
      <div>
        <ul class="card-social-icons footer-social-icons">
          <li><i class="fab fa-facebook-f"></i></li>
          <li><i class="fab fa-twitter"></i></li>
          <li><i class="fab fa-google-plus-g"></i></li>
          <li><i class="fab fa-pinterest-p"></i></li>
          <li><i class="fas fa-envelope"></i></li>
        </ul>
      </div> 
    </div>
  </div>
</div>