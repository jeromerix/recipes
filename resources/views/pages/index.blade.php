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
            <details>
              <summary><img src="{{ URL::to('/images/icons/diary.gif') }}">Diary</summary>
              <p>Lorem Ipsum</p>
            </details>
            <details>
              <summary><img src="{{ URL::to('/images/icons/vegetables.gif') }}">Vegetables</summary>
              <p>Lorem Ipsum</p>
            </details>
            <details>
              <summary><img src="{{ URL::to('/images/icons/fruits.gif') }}">Fruits</summary>
              <p>Lorem Ipsum</p>
            </details>
            <details>
              <summary><img src="{{ URL::to('/images/icons/flour.gif') }}">Baking & Grains</summary>
              <p>Lorem Ipsum</p>
            </details>
            <details>
              <summary><img src="{{ URL::to('/images/icons/sweetners.gif') }}">Added Sweeteners</summary>
              <p>Lorem Ipsum</p>
            </details>
            <details>
              <summary><img src="{{ URL::to('/images/icons/spices.gif') }}">Spices</summary>
              <p>Lorem Ipsum</p>
            </details>
            <details>
              <summary><img src="{{ URL::to('/images/icons/meat.gif') }}">Meats</summary>
              <p>Lorem Ipsum</p>
            </details>
            <details>
              <summary><img src="{{ URL::to('/images/icons/fish.gif') }}">Fish</summary>
              <p>Lorem Ipsum</p>
            </details>
            <details>
              <summary><img src="{{ URL::to('/images/icons/seafood.gif') }}">Seafood</summary>
              <p>Lorem Ipsum</p>
            </details>
            <details>
              <summary><img src="{{ URL::to('/images/icons/condiments.gif') }}">Condiments</summary>
              <p>Lorem Ipsum</p>
            </details>
            <details>
              <summary><img src="{{ URL::to('/images/icons/oliveoil.gif') }}">Oils</summary>
              <p>Lorem Ipsum</p>
            </details>
            <details>
              <summary><img src="{{ URL::to('/images/icons/seasonings.gif') }}">Seasonings</summary>
              <p>Lorem Ipsum</p>
            </details>
            <details>
              <summary><img src="{{ URL::to('/images/icons/sauces.gif') }}">Sauces</summary>
              <p>Lorem Ipsum</p>
            </details>
            <details>
              <summary><img src="{{ URL::to('/images/icons/legumes.gif') }}">Legumes</summary>
              <p>Lorem Ipsum</p>
            </details>
            <details>
              <summary><img src="{{ URL::to('/images/icons/alcohol.gif') }}">Alcohol</summary>
              <p>Lorem Ipsum</p>
            </details>
            <details>
              <summary><img src="{{ URL::to('/images/icons/soup.gif') }}">Soup</summary>
              <p>Lorem Ipsum</p>
            </details>
            <details>
              <summary><img src="{{ URL::to('/images/icons/nuts.gif') }}">Nuts</summary>
              <p>Lorem Ipsum</p>
            </details>
            <details>
              <summary><img src="{{ URL::to('/images/icons/dairy-a.png') }}">Dairy Alternatives</summary>
              <p>Lorem Ipsum</p>
            </details>
            <details>
              <summary><img src="{{ URL::to('/images/icons/desserts.gif') }}">Desserts & Snacks</summary>
              <p>Lorem Ipsum</p>
            </details>
            <details>
              <summary><img src="{{ URL::to('/images/icons/beverages.gif') }}">Beverages</summary>
              <p>Lorem Ipsum</p>
            </details>
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
