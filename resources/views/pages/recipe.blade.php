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
              <div><p class="recipe-user-name">Uploaded by:<strong> &nbsp&nbsp {{ $user->name }} {{ $user->last_name }}</strong><br>Type: <strong> &nbsp&nbsp{{ $recipe->sort}}</strong></p></div>
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
                    <li><a href="whatsapp://send?text={{route ('recipes.show',$recipe->id)}}" data-action="share/whatsapp/share"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ route('recipes.show', $recipe->id) }}"target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/home?status={{route ('recipes.show',$recipe->id)}}"target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://pinterest.com/pin/create/button/?url=&media=&description={{route ('recipes.show',$recipe->id)}}"target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="mailto:?&subject= i want you to see this recipe&amp;body=Check out my recipe at Sherlockfood {{ route('recipes.show', $recipe->id) }}"><i class="fas fa-envelope"></i></a></li>
                  </ul>
                </div>
              </div>
              <div>
                <div class="col col-no-pad user-action-btns">
                @if (Auth::check())
                    @if($hasfavorited == false)
                    <form id="place-comment" action="{{route('recipe.favorite', ['id' => $recipe->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <button type="submit" class="btn btn-danger btn-fav"><i class="far fa-heart"></i> Add to my favorites</button>
                    @else
                  <button class="btn btn-primary btn-fav-recipe"><i class="fas fa-heart"></i> Favorite </button>
                    @endif
                     @endif
                <button type="button" class="btn btn-primary btn-print" onClick="window.print()"><i class="fas fa-print"></i> Print</button>
                  </form>
                </div>
                
               

                @if ( $recipe->user_id == Auth::id() )
                    <div class="col col-no-pad user-action-btns delete-edit">
                    <a href="{{route('recipes.edit',$recipe->id)}}">
                    <i class="far fa-edit"></i>
                    </a>
                    <a onclick="return redirectConfirmationRecipe('{{ route('delete.destroy', ['id' => $recipe->id]) }}', 'Are you sure you want to delete this recipe?');">
                    <i class="fas fa-trash-alt"></i></a>
                    </div>
                @endif
              </div>
            </div>
          </div>
      </section>
      <div class="item-box">
      <section class="recipe-content">
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
          <div class="col-md-7">
            <h2 class="h-content">
              Method of preparation: {{ $recipe->method }}
            </h2>
            <div class="method-text">
              <p>
                {!! $recipe->instruction !!}
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
                          <img class="media-object" src="/profile_images/{{$comment->user->avatar }}">
                      </div>
                    </a>
                    <div class="comment-body" id="c-body">
                      <h3 class="comment-heading name-comment">{{$comment->user->name}} {{$comment->user->last_name}}</h3>
                      <h6 class="text-muted comment-date">{{$comment->created_at}}</h6>
                      <p class="comment-text">
                        {{ $comment->comment }}
                      </p>
                      <div class="btn-like">
                        <i class="fas fa-thumbs-up like-icon" id="comment-like-{{ $comment->id }}"></i>
                        <input type="hidden" class="comment-id" value="{{ $comment->id }}">
                        <input type="hidden" class="user-id" value="{{ Auth::id() }}">
                        <span class="like-txt">
                          @if($comment->hasLiked(Auth::id()))
                            Unlike
                          @else
                            Like
                          @endif
                        </span> &nbsp
                        <span class="num-likes">{{$comment->getLikes()}}</span>
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
                  <textarea name="comment" id="comment" required></textarea>
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
                        <h6><a href="{{ route('login') }}">Login</a> / <a href="{{ route('register') }}">Sign up</a></h6>
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
