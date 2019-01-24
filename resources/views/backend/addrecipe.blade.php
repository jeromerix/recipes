@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <div class="offset-md-3 jumbotroncustom">
                <form action="{{route('recipes.store')}}" method="POST">
                @csrf
                    <h2>add recipe</h2><hr>
                    <div class="form-group">
                        <p>Recipe name:</p>
                        <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Recipe name">
                    </div>

                    <!-- Method -->

                    <div class="form-group">
                        <p>Method of preparation:</p>
                        <select name="method" class="form-control" id="exampleFormControlSelect1">
                            <option>Baking</option>
                            <option>Frying</option>
                            <option>Roasting</option>
                            <option>Grilling</option>
                            <option>Steaming</option>
                            <option>Poaching</option>
                            <option>Simmering</option>
                            <option>Broiling</option>
                            <option>Blanching</option>
                            <option>Braising</option>
                            <option>Stewing</option>
                        </select>
                    </div>

                    <!-- Sort -->

                    <div class="form-group">
                        <p>Sort:</p>
                        <select name="sort" class="form-control" id="exampleFormControlSelect1">
                            <option>Breakfast</option>
                            <option>Dessert</option>
                            <option>Dinner</option>
                            <option>Lunch</option>
                            <option>Snack</option>
                        </select>
                    </div>

                    <!-- add ingredients -->

                    <div class="form-group">
                            <p>Add ingredients</p>
                            <div id='add'>
                                <div class="row">
                                    <div class='col'>
                                        <select  class="form-control search">
                                                <option></option>
                                            @foreach($ingredients as $ingredient)
                                                <option>{{ $ingredient->ingredient }}</option>
                                            @endforeach
                                        </select>
                                        <input type='button' value='Add ingredient' onclick="add('add');">
                                        </div>
                                    </div>
                                </div>

                    <!--instructions-->

                    <div class="form-group">
                        <p>Preparation instructions:</p>
                        <textarea name="instruction" class="form-control" id="exampleTextarea" rows="3"></textarea>
                    </div>

                    <!--number of persons-->

                    <div class="form-group">
                        <p>Number of persons:</p>
                        <select name="how_many" class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                        </select>
                    </div>

                    <!-- Cuisine -->

                    <div class="form-group">
                        <p>Cuisine:</p>
                        <input name="cuisine" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example italian">
                    </div>

                    <!-- Time -->

                    <div class="form-group">
                        <p>Minutes of preparation:</p>
                        <input name="prep_time" class="form-control" type="number" value="45" id="example-number-input">
                     </div>

                    <!-- Image -->

                    <p>Image:</p>
                    <input name="image_link" type="text" class="form-control" placeholder="amount" >
                    <div class="custom-file">
                        <input type="file" class="custom-file-inp" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose image</label>
                    </div>
                    <div class="offset-md-3"><br>
                        <input type="submit" class="btn btn-success" value="{{__('Submit')}}"></button>
                        <button type="button" class="btn btn-secondary">Go back</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>


    function add(divName) {

        var ingredientid = $('.search').find(':selected')[0].index;
        var ingredientname = $('.search').val();

        // console.log('ingredient id: ' + ingredientid);
        // console.log('ingredient name: ' + ingredientname);
        // console.log('======================');

        var newdiv = document.createElement('div');
        newdiv.classList.add('row');
        newdiv.innerHTML = "<div class='col'> \
                <p>" + ingredientname + "</p> \
                <input name='ingredient[]' type='text' class='form-control' value='" + ingredientid + "' hidden > \
            </div> \
            <div class='col'> \
                <input name='amount[]' type='text' class='form-control' placeholder='amount' > \
            </div> \
            <div class='col'> \
                <select name='unit[]' class='form-control'> \
                    <option>g</option> \
                    <option>mg</option> \
                    <option>kg</option> \
                    <option>tbsp</option> \
                    <option>tsp</option> \
                    <option>fl oz</option> \
                    <option>ml</option> \
                    <option>dl</option> \
                    <option>l</option> \
                    <option>gill</option> \
                    <option>bag</option> \
                    <option>cloves</option> \
                    <option>pinch</option> \
                    <option>whole</option> \
                </select> \
            </div>";
        var deleteRow = document.createElement('span');
        deleteRow.innerHTML = "remove";
        deleteRow.addEventListener('click',remove);
        newdiv.appendChild(deleteRow);


        document.getElementById(divName).appendChild(newdiv);
        }

        function remove() {
        this.parentNode.remove();
        };
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script type="text/javascript">

          $(".search").select2({
                placeholder: "Select an ingredient",
                allowClear: true,
            });
    </script>
@endsection
