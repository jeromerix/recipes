@extends('layouts.app')

@section('content')
   <div class="container">
    <div class="content-box-l">
      <div class="item-box">
        <div class="row row-bottom-space">
          <div class="col-md-6">
            <div>
              <img src="{{ URL::to('/images/dish-01.png') }}">
            </div>
          </div>
          <div class="col-md-6">
            <h1>Roast cod with paella & saffron olive oil</h1>
            <div class="info"><i class="far fa-clock"></i>
              <div>10-20 min</div>
            </div>
            <div class="info"><i class="fas fa-male"></i>
              <div>2 Persons</div>
            </div>
            <div class="info"><i class="fas fa-globe-asia"></i>
              <div>Mexican</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h2 class="h-content">Ingredients</h2>
            <div class="ul-wrapper">
              <ul class="list-group">
                <li class="list-group-item">1 bag of nacho cheese tortilla chips</li>
                <li class="list-group-item">300 grams. minced beef</li>
                <li class="list-group-item">1 bag taco spices</li>
                <li class="list-group-item">1 paprika</li>
                <li class="list-group-item">1 onion</li>
                <li class="list-group-item">2 cloves of garlic</li>
                <li class="list-group-item">Cheddar cheese/li>
                <li class="list-group-item">Grated cheese</li>
            </div>
            </ul>
          </div>
          <div class="col-md-6">
            <h2 class="h-content">
              Method of preparation
            </h2>
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
  </div>
@endsection
