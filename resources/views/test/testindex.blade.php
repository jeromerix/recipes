@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="paginate"><{{ $recipes->render() }}</div
    <div class="content-box-m">
      <div class="row">
          <div class="col-md-3">
            <div class="card card-accordion">
              <div class="card-header card-accordion-header text-center">
                <h3 class="">Select your ingredients</h3>
              </div>
              @foreach($categories as $category)
                  <details>
                    <summary>{{ $category->category }}</summary>
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
              @foreach($recipes as $recipe)
            <div class="col-md-3">
          <div class="card card-cascade card-cascade-narrower mb-5">
            <div class="card-view"><img class="card-img-top" src="{{$recipe->image_link}}" alt="Recipe image">
            </div>

            <div class="card-body">

              <h5 class="card-title">{{ $recipe->name }}</h5>
              <div class="row row-card-info-bg">
                <div class="col-md-4 col-no-pad"><i class="far fa-clock"></i><div  class="card-info">{{$recipe->prep_time}} Minutes </div>
                </div>
                <div class="col-md-4 col-no-pad"><i class="fas fa-male"></i><div class="card-info">{{$recipe->how_many}}</div>
                </div>
                <div class="col-md-4 col-no-pad"><i class="fas fa-globe-asia"></i><div class="card-info">{{$recipe->cuisine}}</div>
                </div>
              </div>
                <p class="card-text">{{$recipe->instruction}}
                </p>
                <a href="#" class="card-link">More info</a>
                <div>
                  <ul class="card-social-icons">
                    <li><i class="fab fa-facebook-f"></i></li>
                      <li><a href="{{URL::to('/delete/'.$recipe->id) }}"></a><i class="fab fa-twitter"></i></li>
                      <li><i class="fab fa-google-plus-g"></i></li>
                      <li><i class="fab fa-pinterest-p"></i></li>
                      <li><i class="fas fa-envelope"></i></li>
                  </ul>
                </div>

            </div>
          </div>
        </div>
        @endforeach
    </div>
</div>
</div>

@endsection
