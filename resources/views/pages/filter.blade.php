@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="content-box-m">
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="card card-filter-page">
                  <a href="{{ url('/') }}"><i class="fas fa-long-arrow-alt-left"></i>&nbsp&nbspGo back to home page &nbsp&nbsp<i class="fas fa-home"></i></a>
                </div>
              </div>
                @foreach($recipes as $recipe)
                    <div class="col-lg-3 col-md-4 mx-auto">
                        <div class="card card-cascade card-cascade-narrower mb-5">
                            <div class="card-view">
                                <a href="{{route ('recipes.show',$recipe->id)}}">
                                    <img class="card-img-top" src="{{ $recipe->image_link }}" alt="Recipe image">
                                </a>
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
                            <p id='cl{{ $recipe->id }}'>
                            </p>

                            <script>
                                var sl = [@foreach($ingredients as $slist)
                                            {{ $slist }},
                                          @endforeach];

                                var il = [@foreach($recipe->ingredients as $ingredient)
                                            {{ $ingredient->id }},
                                          @endforeach];

                                function arrayContains(needle, haystack) {
                                    for (var i = 0; i < needle.length; i++) {
                                        let occurrences = [];
                                        for (var j = 0; j < haystack.length; j++) {
                                            if (needle[i] == haystack[j]) {
                                                occurrences.push(needle[i]);
                                            }
                                        }
                                        if (occurrences.length === 0) {
                                        return false;
                                        }
                                    }
                                    return true;
                                }

                                if(arrayContains(il,sl) == true) {
                                    document.getElementById('cl{{ $recipe->id }}').innerHTML = "you got all ingredients";
                                }

                            </script>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
              <div class="col-md-4 mx-auto">
                <div class="card card-body mb-2">
                  <div class="paginate mx-auto">
                    {{ $recipes->appends(['ingredients' => $ingredients])->render() }}
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection
