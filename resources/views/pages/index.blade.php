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
                            <select class="form-control search col-md-8">
                                <option></option>
                                @foreach($categories as $category)
                                    @foreach($category->ingredients as $ingredient)
                                    <option>{{ $ingredient->ingredient }}</option>
                                    @endforeach
                                @endforeach
                            </select>
                            <input type='button' id='addBtn' class="btn btn-primary col-md-4" value='Add'>

                        @foreach($categories as $category)
                            <details>
                                <summary>
                                    <img src="{{ $category->icon }}">{{ $category->category }}
                                </summary>
                                @foreach($category->ingredients as $ingredient)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="ingredientselected[]" id="inlineCheckbox{{ $ingredient->id }}" value="{{ $ingredient->id }}">
                                        <label class="form-check-label" for="inlineCheckbox{{ $ingredient->id }}"> {{ $ingredient->ingredient }}</label>
                                    </div>
                                @endforeach
                            </details>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>
                            Selected ingredients
                            <input type="Button" onclick="togglecheckboxes('ingredientselected[]')" value="Remove all" />
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('filter')}}">
                                <div id="list"></div>
                                <input type="submit" class="btn btn-success" value="{{__('Submit')}}"></button>
                            </form>
                        </div>
                    </div>
                </div>


                @foreach($recipes as $recipe)

                    <div class="col-md-3">
                        <div class="card card-cascade card-cascade-narrower mb-5">
                            <div class="card-view">
                                <a href="{{route ('recipes.show',$recipe->id)}}"><img class="card-img-top" src="{{ $recipe->image_link }}" alt="Recipe image"></a>
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
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ route('recipes.show', $recipe->id) }}"target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/home?status={{route ('recipes.show',$recipe->id)}}"target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://plus.google.com/share?url={{route ('recipes.show',$recipe->id)}}"target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="https://pinterest.com/pin/create/button/?url=&media=&description={{route ('recipes.show',$recipe->id)}}"target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="mailto:?&subject=Check out this recipe from sherlockfood!"><i class="fas fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
              <div class="col-md-4 mx-auto">
                <div class="card card-body mb-2">
                  <div class="paginate mx-auto">
                    {{ $recipes->render() }}
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript">
        $(".search").select2({
            placeholder: "Select an ingredient",
            allowClear: true,
        });


        var list = $('#list');

        $(function(){
            $('#addBtn').click(function(event){
                var ingredientid = $('.search').find(':selected')[0].index;
                var ingredientname = $('.search').val();
                $('#inlineCheckbox'+ingredientid).prop('checked',true);
                addIngredient(ingredientid,ingredientname);
            });

            $('.form-check-input').change(function(event){
                if (this.checked){
                    let label = $('label[for="' + this.id + '"]');
                    addIngredient(this.value, label.html());
                }
                else {
                    removeIngredient(this.value);
                }
            });

        });

        function addIngredient(id,name){
            var ingredientItem = $('#list > #idiv' + id);
            if(ingredientItem.length == 0){
                let ingredient = document.createElement('div');
                ingredient.classList.add('row');
                ingredient.classList.add('space-bottom');
                ingredient.innerHTML= "<div class='col-md-10'> \
                <h6>" + name + "</h6> \
                <input name='ingredient[]' type='text' class='form-control' value='" + id + "' hidden > \
                ";
              	ingredient.id = 'idiv' + id;
                var deleteRow = document.createElement('span');
                deleteRow.innerHTML = "<i class='fas fa-trash-alt'></i>";
                deleteRow.addEventListener('click',remove);
                ingredient.appendChild(deleteRow);
              	list.append(ingredient);
            }
        }

        function removeIngredient(ingredientId) {
            $('#list > #idiv' + ingredientId).remove();
        }

        function remove() {
            this.parentNode.remove();
        }

        var isAllCheck = false;
        function togglecheckboxes(cn){

            var cbarray = document.getElementsByName(cn);
            for(var i = 0; i < cbarray.length; i++){

                cbarray[i].checked = isAllCheck;
                document.getElementById("list").innerHTML = "";
        }
        isAllCheck = isAllCheck;
        var list = [];
        }


    </script>
@endsection
