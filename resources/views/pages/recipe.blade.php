@extends('layouts.app')

@section('content')
  <header>
    <div class="recipe-header" style="background-image: url('{{ $recipe->image_link}}');">
    </div>
  </header>
  <div class="container">
    <div class="content-box-l">
      <section class="main-section">
        <div class="item-box box-bg">
          <div class="row row-bottom-space">
            <div class="col-md-6">
              <figure class="recipe-img">
                <img src="{{ $recipe->image_link }}">
              </figure>
            </div>
            <h1 class="recipe-title">{{ $recipe->name }}</h1>
            <div class="col-md-6">
              <div><p class="recipe-user-name">Uploaded by:<strong> &nbsp&nbsp John Doe</strong></p></div>
              <div class="row  text-center">
                <div class="col col-no-pad">
                  <ul class="recipe-info">
                    <li><i class="far fa-clock"></i><span class="recipe-info-txt">{{ $recipe->prep_time }} min</span></li>
                    <li><i class="fas fa-male"></i><span class="recipe-info-txt">{{ $recipe->how_many}}</span></li>
                    <li><i class="fas fa-globe-asia"></i><span class="recipe-info-txt">{{ $recipe->cuisine }}</span></li>
                  </ul>
                </div>
              </div>
              <div class="row text-center">
                <div class="col col-no-pad">
                  <ul class="card-social-icons recipe-page">
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-google-plus-g"></i></li>
                    <li><i class="fab fa-pinterest-p"></i></li>
                    <li><i class="fas fa-envelope"></i></li>
                  </ul>
                </div>
              </div>
              <div>
                <div class="col col-no-pad user-action-btns">
                    <form id="place-comment" action="{{route('recipe.favorite', ['id' => $recipe->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <button type="submit" class="btn btn-danger btn-fav"><i class="far fa-heart"></i> Add to my favorites</button>
                <button type="button" class="btn btn-primary btn-print" onClick="window.print()"><i class="fas fa-print"></i> Print</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </section>
      <div class="item-box">
      <section>
        <div class="row">
          <div class="col-md-5">
            <h2 class="h-content">Ingredients</h2>
            <div class="ul-wrapper">
              <ul class="list-group">
                  @foreach($recipe->ingredients as $ingredient)
                  <li class="list-group-item">{{ $ingredient->pivot->amount }} {{ $ingredient->pivot->unit }} {{ $ingredient -> ingredient }}</li>
                  @endforeach
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <h2 class="h-content">
              Method of preparation: {{ $recipe->method }}
            </h2>
            <div class="method-text">
              <p>
                {{ $recipe->instruction }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="row">
        <div class="col-md-12">
          <div class="item-box comment-section">
             <hr>
             @foreach($recipe->comments as $comment)
              <div class="row">
                <div class="col-md-12">
                  <div class="comment">
                    <a class="pull-left" href="#">
                      <div class="user-comment-avatar">
                          <img class="media-object" src="{{ url('images/user-avatar.png') }}">
                      </div>
                    </a>
                    <div class="comment-body" id="c-body">
                      <h3 class="comment-heading name-comment">{{$comment->user->name}} {{$comment->user->last_name}}</h3>
                      <h6 class="text-muted comment-date">{{$comment->created_at}}</h6>
                      <p class="comment-text">
                        {{ $comment->comment }}
                      </p>
                      <div class="btn-like">
                        <i class="fas fa-thumbs-up" onclick="likeBtn()"></i>
                        <span id="like-txt">Like</span> &nbsp&nbsp&nbsp
                        <span id="num-likes">{{$comment->rating}}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="line-comment">
              @endforeach
              <div class="row">
                <div class="col-md-8 offset-md-2">
                  @if(Auth::check())
                  <form id="place-comment" action="{{route('recipe.comment', ['id' => $recipe->id])}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <textarea name="comment" id="comment" ></textarea>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn-comment">Comment</button>
                    </div>
                  </div>
                  </form>
                  @else
                  <div>
                    <div class="text-center comment-msg-box">
                      Please login to place a comment
                    </div>
                  </div>
                  @endif
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection
