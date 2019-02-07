@extends('layouts.app')

@section('content')
<head>
    <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</head>
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
            <form id="add-recipe-form" action="{{route('recipes.update',$recipe->id)}}" method="POST" enctype="multipart/form-data">
                @method('Put')
                @csrf
                <h2 class="title-about">Add recipe</h2><hr>
                <div class="form-group">
                    <label>Recipe name:</label>
                    <input name="name" type="text" class="form-control" id="formGroupExampleInput" value="{{ old('name',$recipe->name)}}">
                </div>
                <!-- Method -->
                <div class="form-group">
                    <label>Method of preparation:</label>
                    <select name="method" class="form-control" id="exampleFormControlSelect1">
                        <option @if (old('method',$recipe->method) == 'Baking') selected @endif>Baking</option>
                        <option @if (old('method',$recipe->method) == 'Frying') selected @endif>Frying</option>
                        <option @if (old('method',$recipe->method) == 'Roasting') selected @endif>Roasting</option>
                        <option @if (old('method',$recipe->method) == 'Grilling') selected @endif>Grilling</option>
                        <option @if (old('method',$recipe->method) == 'Steaming') selected @endif>Steaming</option>
                        <option @if (old('method',$recipe->method) == 'Poaching') selected @endif>Poaching</option>
                        <option @if (old('method',$recipe->method) == 'Simmering') selected @endif>Simmering</option>
                        <option @if (old('method',$recipe->method) == 'Broiling') selected @endif>Broiling</option>
                        <option @if (old('method',$recipe->method) == 'Blanching') selected @endif>Blanching</option>
                        <option @if (old('method',$recipe->method) == 'Braising') selected @endif>Braising</option>
                        <option @if (old('method',$recipe->method) == 'Stewing') selected @endif>Stewing</option>
                        <option @if (old('method',$recipe->method) == 'Something else') selected @endif>Something else<option>
                    </select>
                </div>
                <!-- Sort -->
                <div class="form-group">
                    <label>Sort:</label>
                    <select name="sort" class="form-control" id="exampleFormControlSelect1">
                        <option @if (old('sort',$recipe->sort) == 'Breakfast') selected @endif>Breakfast</option>
                        <option @if (old('sort',$recipe->sort) == 'Dessert') selected @endif>Dessert</option>
                        <option @if (old('sort',$recipe->sort) == 'Dinner') selected @endif>Dinner</option>
                        <option @if (old('sort',$recipe->sort) == 'Lunch') selected @endif>Lunch</option>
                        <option @if (old('sort',$recipe->sort) == 'Snack') selected @endif>Snack</option>
                    </select>
                </div>
                <!-- add ingredients -->
                <div class="form-group">
                    <label>Add ingredients</label>
                    <div id='add'>
                        <div class="row">
                            <div class='col'>
                                <select  class="form-control search">
                                    <option></option>
                                    @foreach($ingredients as $ingredient)
                                    <option>{{ $ingredient->ingredient }}</option>
                                    @endforeach
                                </select>
                                <input type='button' class="btn btn-primary" value='Add ingredient' onclick="add('add');">
                            </div>
                        </div>
                        @foreach($recipe->ingredients as $ingredient)
                        <div class="row">
                                <div class='col-md-12'>
                                    <h6>" {{$ingredient->ingredient}} "</h6>
                                    <input name='ingredient[]' type='text' class='form-control' value='{{$ingredient->id}}' hidden >
                                </div>
                            <div class='col-md-8'>
                                <input name='amount[]' value='{{ $ingredient->pivot->amount }}' type='text' class='form-control' placeholder='amount' >
                            </div>
                            <div class='col-md-3'>
                                <select name='unit[]' value='{{ $ingredient->pivot->unit }}' class='form-control'>
                                     <option @if (old('unit[]',$ingredient->pivot->unit) == 'g') selected @endif>g</option>
                                     <option @if (old('unit[]',$ingredient->pivot->unit) == 'mg') selected @endif>mg</option>
                                     <option @if (old('unit[]',$ingredient->pivot->unit) == 'kg') selected @endif>kg</option>
                                     <option @if (old('unit[]',$ingredient->pivot->unit) == 'tbsp') selected @endif>tbsp</option>
                                     <option @if (old('unit[]',$ingredient->pivot->unit) == 'tsp') selected @endif>tsp</option>
                                     <option @if (old('unit[]',$ingredient->pivot->unit) == 'fl') selected @endif>fl oz</option>
                                     <option @if (old('unit[]',$ingredient->pivot->unit) == 'ml') selected @endif>ml</option>
                                     <option @if (old('unit[]',$ingredient->pivot->unit) == 'dl') selected @endif>dl</option>
                                     <option @if (old('unit[]',$ingredient->pivot->unit) == 'l') selected @endif>l</option>
                                     <option @if (old('unit[]',$ingredient->pivot->unit) == 'gill') selected @endif>gill</option>
                                     <option @if (old('unit[]',$ingredient->pivot->unit) == 'bag') selected @endif>bag</option>
                                     <option @if (old('unit[]',$ingredient->pivot->unit) == 'cloves') selected @endif>cloves</option>
                                     <option @if (old('unit[]',$ingredient->pivot->unit) == 'pinch') selected @endif>pinch</option>
                                     <option @if (old('unit[]',$ingredient->pivot->unit) == 'whole') selected @endif>whole</option>
                                     <option @if (old('unit[]',$ingredient->pivot->unit) == 'cup') selected @endif>cup</option> \
                                </select>
                            </div>
                            <span onclick="clickremove(this)" id="trash"><i class='fas fa-trash-alt'></i></span>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!--instructions-->
                <div class="form-group">
                    <label>Preparation instructions:</label>
                    <textarea name="instruction" class="form-control" id="exampleTextarea" rows="3"  >{{ old('instruction',$recipe->instruction)}}</textarea>
                </div>
                <!--number of persons-->
                <div class="form-group">
                    <label>Number of persons:</label>
                    <select name="how_many" class="form-control" id="exampleFormControlSelect1">
                        <option @if (old('how_many',$recipe->how_many) == '1') selected @endif>1</option>
                        <option @if (old('how_many',$recipe->how_many) == '2') selected @endif>2</option>
                        <option @if (old('how_many',$recipe->how_many) == '3') selected @endif>3</option>
                        <option @if (old('how_many',$recipe->how_many) == '4') selected @endif>4</option>
                        <option @if (old('how_many',$recipe->how_many) == '5') selected @endif>5</option>
                        <option @if (old('how_many',$recipe->how_many) == '6') selected @endif>6</option>
                        <option @if (old('how_many',$recipe->how_many) == '7') selected @endif>7</option>
                        <option @if (old('how_many',$recipe->how_many) == '8') selected @endif>8</option>
                        <option @if (old('how_many',$recipe->how_many) == '9') selected @endif>9</option>
                        <option @if (old('how_many',$recipe->how_many) == '10') selected @endif>10</option>
                        <option @if (old('how_many',$recipe->how_many) == '11') selected @endif>11</option>
                        <option @if (old('how_many',$recipe->how_many) == '12') selected @endif>12</option>
                    </select>
                </div>
                <!-- Cuisine -->
                <div class="form-group">
                    <label>Cuisine:</label>
                    <input name="cuisine" type="text" class="form-control" id="formGroupExampleInput" value="{{old('cuisine',$recipe->cuisine)}}">
                </div>
                <!-- Time -->
                <div class="form-group">
                    <label>Minutes of preparation:</label>
                    <input name="prep_time" class="form-control" type="number" value="{{ old('prep_time',$recipe->prep_time)}}" id="example-number-input">
                </div>
                <!-- Image -->
                <label>Image:</label>
                <input type="file" class="form-control-file" name="image_link" id="customFile"><br>
                <input type="submit" class="btn btn-success" value="{{__('Update')}}"></button>
                <button type="button" class="btn btn-secondary">Go back</button>
            </form>
        </div>
    </div>
</div>


<script>
    function clickremove(bin) {
    var click = document.getElementById(bin.id);
    click.parentNode.remove();
    }

    function add(divName) {

        var ingredientid = $('.search').find(':selected')[0].index;
        var ingredientname = $('.search').val();

        if (ingredientname == "") {
        alert("Select ingredient first before pressing add ingredient");
        }
        else {
            // console.log('ingredient id: ' + ingredientid);
            // console.log('ingredient name: ' + ingredientname);
            // console.log('======================');

            var newdiv = document.createElement('div');
            newdiv.classList.add('row');
            newdiv.classList.add('space-bottom');
            newdiv.innerHTML =
           "<div class='col-md-12'> \
                <h6>" + ingredientname + "</h6> \
                <input name='ingredient[]' type='text' class='form-control' value='" + ingredientid + "' hidden > \
            </div> \
            <div class='col-md-8'> \
                <input name='amount[]' type='text' class='form-control' placeholder='amount' > \
            </div> \
            <div class='col-md-3'> \
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
                    <option>cup</option> \
                </select> \
            </div>";

            var deleteRow = document.createElement('span');

            deleteRow.innerHTML = "<i class='fas fa-trash-alt'></i>";
            deleteRow.addEventListener('click',remove);
            newdiv.appendChild(deleteRow);

            document.getElementById(divName).appendChild(newdiv);
        }
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
