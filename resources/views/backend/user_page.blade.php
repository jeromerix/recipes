@extends('layouts.app')

@section('content')
<header>
  <div class="user-header"></div>
</header>
<div class="container">
  <div class="row">
      <div class="col-md-6 offset-3">
        <div class="profile-card text-center">
          <div class="profile-avatar">
            <img src="{{ URL::to('/images/gordon-ramsay.jpg') }}">
          </div>
          <div class="profile-card-body">
            <h6>Member since: {{ Auth::user()->created_at }} </h6>
            <h1 class="profile-title">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</h1>
            <h6 class="profile-location"><i class="fas fa-map-marker-alt"></i> {{ Auth::user()->city }} - {{ Auth::user()->country }}</h6>
          </div>
          <div class="profile-card-body">
            <h2 class="user-panel-title">User panel</h2>
            <div class="profile-usermenu">
              <ul class="panel-btn">
                <li>
                  <a href="{{route ('recipes.create')}}">
                  <i class="fas fa-plus-square"></i>
                  Add new recipe </a>
                </li>
                <li>
                  <a href="#">
                  <i class="fas fa-file-upload"></i>
                  My uploaded recipes </a>
                </li>
                <li>
                  <a href="#" target="_blank">
                  <i class="fas fa-heart"></i>
                  My favorite recipes </a>
                </li>
                <li>
                  <a href="#" target="_blank">
                  <i class="far fa-image"></i>
                  Change profile image </a>
                </li>
              </ul>
				    </div>
          </div>
        </div>
    	</div>
  </div>
</div>
@endsection
