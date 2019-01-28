@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="content-box-m">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-accordion">
                        <div class="card-header card-accordion-header text-center">
                            <h3 class="">
                                Select your ingredients
                            </h3>
                        </div>

                            <select  class="form-control search col-md-8">
                                <option></option>
                                @foreach($categories as $category)

                                @foreach($category->ingredients as $ingredient)
                                <option>{{ $ingredient->ingredient }}</option>

                                @endforeach

                                @endforeach
                            </select>
                            <input type='button' class="btn btn-primary col-md-4" value='Add' onclick="add('add');">

                        @foreach($categories as $category)
                            <details>
                                <summary>
                                    <img src="{{ $category->icon }}">{{ $category->category }}
                                </summary>
                                @foreach($category->ingredients as $ingredient)
                                    <div class="form-check form-check-inline">
                                        <input onclick="showCheck(this)" class="form-check-input" type="checkbox" name="ingredientselected[]" id="inlineCheckbox{{ $ingredient->id }}" value="{{ $ingredient->id }}">
                                        <label class="form-check-label" for="inlineCheckbox{{ $ingredient->id }}"> {{ $ingredient->ingredient }}</label>
                                    </div>
                                @endforeach
                            </details>
                        @endforeach
                    </div>
                </div>
                @foreach($recipes as $recipe)
                    <div class="col-md-3">
                        <div class="card card-cascade card-cascade-narrower mb-5">
                            <div class="card-view">
                                <img class="card-img-top" src="{{ $recipe->image_link }}" alt="Recipe image">
                            </div>

                            <div class="card-body">

                                <h5 class="card-title">
                                    {{ $recipe->name }}
                                </h5>
                                <div class="row row-card-info-bg">
                                    <div class="col-md-4 col-no-pad">
                                        <i class="far fa-clock"></i>
                                        <div  class="card-info">
                                            {{$recipe->prep_time}} Minutes
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-no-pad">
                                        <i class="fas fa-male"></i>
                                        <div class="card-info">
                                            {{$recipe->how_many}}
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-no-pad">
                                        <i class="fas fa-globe-asia"></i>
                                        <div class="card-info">
                                            {{$recipe->cuisine}}
                                        </div>
                                    </div>
                                </div>
                                <p class="card-text">
                                    {{str_limit ($recipe->instruction, 300)}}
                                </p>
                                <a href="{{route ('recipes.show',$recipe->id)}}" class="card-link">
                                    More info
                                </a>
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
                @endforeach
            </div>
        </div>
        <div class="paginate">
            {{ $recipes->render() }}
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript">
      $(".search").select2({
        placeholder: "Select an ingredient",
        allowClear: true,
      });

      function add(){
          var ingredientid = "inlineCheckbox" + $('.search').find(':selected')[0].index;
          var boxbox = document.getElementById(ingredientid);
          boxbox.checked = true;
      }

      function showCheck(box){
        
      }
    </script>
@endsection
