@extends('layouts.app')

@section('content')
  <header>
    <div class="recipe-header">
    </div>
  </header>
  <div class="container">
    <div class="content-box-l">
      <section class="main-section">
        <div class="item-box box-bg">
          <div class="row row-bottom-space">
            <div class="col-md-6">
              <figure class="recipe-img">
                <img src="{{ URL::to('/images/dish-02.jpg') }}">
              </figure>
            </div>
            <h1 class="recipe-title">Roast cod with paella & saffron olive oil</h1>
            <div class="col-md-6">
              <div><p>Uploaded by:<strong> &nbsp&nbsp John Doe</strong></p></div>
              <div class="row  text-center">
                <div class="col col-no-pad">
                  <ul class="recipe-info">
                    <li><i class="far fa-clock"></i><span class="recipe-info-txt">20- min</span></li>
                    <li><i class="fas fa-male"></i><span class="recipe-info-txt">1-2</span></li>
                    <li><i class="fas fa-globe-asia"></i><span class="recipe-info-txt">Mexican</span></li>
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
      </section>
      <div class="item-box">
      <section>
        <div class="row">
          <div class="col-md-5">
            <h2 class="h-content">Ingredients</h2>
            <div class="ul-wrapper">
              <ul class="list-group">
                <li class="list-group-item">1 bag of nacho cheese tortilla chips</li>
                <li class="list-group-item">300 grams. minced beef</li>
                <li class="list-group-item">1 bag taco spices</li>
                <li class="list-group-item">1 paprika</li>
                <li class="list-group-item">1 onion</li>
                <li class="list-group-item">2 cloves of garlic</li>
                <li class="list-group-item">Cheddar cheese</li>
                <li class="list-group-item">Grated cheese</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <h2 class="h-content">
              Method of preparation
            </h2>
            <div class="method-text">
              <p>
                <span class="ing-num">1.</span> bake the minced beef if its finished add the vegetables and the bag of taco spices
              </p>
              <p>
                <span class="ing-num">2.</span> put the taco chips at the bottom of the oven dish, cover it with cheddar put the minced meat
                over it and over it the grated cheese.
              </p>
              <p>
                <span class="ing-num">3.</span> Set 10 minutes in a preheated oven at 220 degrees. The dish is ready when the cheese is melted on top.
              </p>
            </div>  
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection
