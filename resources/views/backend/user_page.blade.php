@extends('layouts.app')

@section('content')
<header>
  <div class="user-header"></div>
</header>
<div class="container">
  <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="profile-card text-center">
          <div class="profile-avatar">
            <img src="/profile_images/{{$user->avatar}}">
          </div>
          <div class="profile-card-body">
            <h6>Member since: {{ Auth::user()->created_at }} </h6>
            <h1 class="profile-title">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</h1>
            <h6 class="profile-location"><i class="fas fa-map-marker-alt"></i> {{ Auth::user()->city }} - {{ Auth::user()->country }}</h6>
          </div>
          <div class="profile-card-body">
            <h2 class="user-panel-title"><i class="fas fa-users-cog"></i> User panel</h2>
            <div class="profile-usermenu">
              <ul class="panel-btn">
                <li>
                  <a href="{{route ('recipes.create')}}">
                  <i class="fas fa-plus-square"></i>
                  Add new recipe </a>
                </li>
                  <li>
                  <a  href="#" data-toggle="modal" data-target="#recipemodal">
                    <i class="fas fa-file-upload"></i>
                    My uploaded recipes </a>
                    <!-- Modal myrecipes -->
                  <div class="modal fade" id="recipemodal" tabindex="-1" role="dialog" aria-labelledby="#recipemodal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">My uploaded recipes</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <table>
                            @if(!isset($recipes))
                            @foreach($myrecipes as $recipe)
                            <td><a href="{{route ('recipes.show',$recipe->id)}}">
                              <i class="fas fa-file-upload"></i>
                              {{$recipe->name}} </a></td>
                            <td><a href="{{route('recipes.edit',$recipe->id)}}">
                              &nbsp;<i class="far fa-edit"></i></a></td>
                            <td><a href="{{ route('delete.destroy', $recipe->id) }}">
                              &nbsp;<i class="fas fa-trash-alt"></i></a></td></tr>
                              @endforeach
                          @endif
                          </table>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  </li>
                  <!-- end Modal  recipes-->
                <li>
                  <a href="#" target="_blank">
                  <i class="fas fa-heart"></i>
                  My favorite recipes </a>
                </li>
                <li>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">
                  <i class="far fa-image"></i>
                  Change profile image </a>
                </li>
                <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">update profile picture</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="/user" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="modal-body">
                            <div class="form-group">
                              <label for="title">Enter your profile image</label>
                              <input type="file" name="pic" accept="image">
                          </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary" action="/user">update</button>
                            </div>
                          </div>
                        </div>
                      </div>
                  <!---end modal --->
              </ul>
				    </div>
          </div>
        </div>
    	</div>
  </div>
</div>
@endsection
