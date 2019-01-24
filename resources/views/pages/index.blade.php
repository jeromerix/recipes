@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="content-box-m">
      <div class="row">
        <div class="col-md-3">
          <div class="card card-accordion">
            <div class="card-header card-accordion-header text-center">
              <h3 class="">Select your ingredients</h3>
            </div>
            @foreach($categories as $category)
                <details>
                  <summary><img src="{{ $category->icon }}">{{ $category->category }}</summary>
                  @foreach($category->ingredients as $ingredient)
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="ingredientselected[]" id="inlineCheckbox{{ $ingredient->id }}" value="{{ $ingredient->id }}">
                      <label class="form-check-label" for="inlineCheckbox{{ $ingredient->id }}">{{ $ingredient->ingredient }}</label>
                  </div>
                  @endforeach
                </details>

            @endforeach
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-cascade card-cascade-narrower mb-5">
            <div class="card-view"><img class="card-img-top" src="{{ URL::to('/images/dish-02.jpg') }}" alt="Recipe image">
            </div>
            <div class="card-body">
              <h5 class="card-title">Roast cod with paella & saffron olive oil</h5>
              <div class="row row-card-info-bg">
                <div class="col-md-4 col-no-pad"><i class="far fa-clock"></i><div       class="card-info">20 - min</div>
                </div>
                <div class="col-md-4 col-no-pad"><i class="fas fa-male"></i><div class="card-info">1/2</div>
                </div>
                <div class="col-md-4 col-no-pad"><i class="fas fa-globe-asia"></i><div class="card-info">Mexican</div>
                </div>
              </div>
                <p class="card-text">Lorem ipsum dolor sit amet, quis commodi eveniet ex tempore. Asperiores voluptates fugit, quod quibusdam iure sit modi..
                </p>
                <a href="{{ url('/recipe') }}" class="card-link">More info</a>
                <div>
                  <ul class="card-social-icons">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-cascade card-cascade-narrower mb-5">
            <div class="card-view"><img class="card-img-top" src="{{ URL::to('/images/apple-pie.jpg') }}" alt="Recipe image">
            </div>
            <div class="card-body">
              <h5 class="card-title"> Apple Pie</h5>
              <div class="row row-card-info-bg">
                <div class="col-md-4 col-no-pad"><i class="far fa-clock"></i><div       class="card-info">20/45 - min</div>
                </div>
                <div class="col-md-4 col-no-pad"><i class="fas fa-male"></i><div class="card-info">8</div>
                </div>
                <div class="col-md-4 col-no-pad"><i class="fas fa-globe-asia"></i><div class="card-info">English</div>
                </div>
              </div>
                <p class="card-text">Lorem ipsum dolor sit amet, quis commodi eveniet ex tempore. Asperiores voluptates fugit, quod quibusdam iure sit modi..
                </p>
              <a href="{{ url('/recipe') }}" class="card-link">More info</a>
                <div>
                  <ul class="card-social-icons">
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
        <div class="col-md-3">
          <div class="card card-cascade card-cascade-narrower mb-5">
            <div class="card-view"><img class="card-img-top" src="{{ URL::to('/images/bibimbap.jpg') }}" alt="Recipe image">
            </div>
            <div class="card-body">
              <h5 class="card-title">Roast cod with paella & saffron olive oil</h5>
              <div class="row row-card-info-bg">
                <div class="col-md-4 col-no-pad"><i class="far fa-clock"></i><div       class="card-info">60 - min</div>
                </div>
                <div class="col-md-4 col-no-pad"><i class="fas fa-male"></i><div class="card-info">1</div>
                </div>
                <div class="col-md-4 col-no-pad"><i class="fas fa-globe-asia"></i><div class="card-info">Korean</div>
                </div>
              </div>
                <p class="card-text">Lorem ipsum dolor sit amet, quis commodi eveniet ex tempore. Asperiores voluptates fugit, quod quibusdam iure sit modi..
                </p>
                <a href="{{ url('/recipe') }}" class="card-link">More info</a>
                <div>
                  <ul class="card-social-icons">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
