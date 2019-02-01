@extends('layouts.app')

@section('content')
  <header>
    @foreach($recipes as $recipe)
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
              <div><p>Uploaded by:<strong> &nbsp&nbsp John Doe</strong></p></div>
              <div class="row  text-center">
                <div class="col col-no-pad">
                  <ul class="recipe-info">
                    <li><i class="far fa-clock"></i><span class="recipe-info-txt">{{ $recipe->prep_time }} min</span></li>
                    <li><i class="fas fa-male"></i><span class="recipe-info-txt">{{ $recipe->how_many}}</span></li>
                    <li><i class="fas fa-globe-asia"></i><span class="recipe-info-txt">{{ $recipe->cuisine }}</span></li>
                  </ul>
                </div>
              </div>
              <div class="row  text-center">
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
                <div class="col col-no-pad">
                  <button type="button" class="btn btn-danger btn-fav"><i class="far fa-heart"></i> Add to my favorites</button>
                  <button type="button" class="btn btn-primary btn-print"><i class="fas fa-print"></i> Print</button>
                </div>
              </div>
            </div>
          </div>
        @endforeach
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
  </div>
</div>
@endsection
