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
      <form id="add-recipe-form" action="{{route('recipes.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2 class="title-about">Add recipe</h2><hr>
        <div class="form-group">
          <label>Recipe name:</label>
          <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Recipe name" value = "{{ old('name')}}">
          </div>
          <!-- Method -->
          <div class="form-group">
            <label>Method of preparation:</label>
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
              <option>Something else<option>
            </select>
          </div>
          <!-- Sort -->
          <div class="form-group">
            <label>Sort:</label>
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
            <label>Add ingredients</label> <i style="color:green; cursor: pointer;" onclick="popupinfo()" class="fas fa-info-circle"></i>
              <div id='add'>
                <div class="row">
                  <div class='col'>
                    <select  class="form-control search">
                      <option></option>
                        @foreach($ingredients as $ingredient)
                      <option>{{ $ingredient->ingredient }}</option>
                        @endforeach
                    </select>
                    <input type='button' class="btn btn-primary btn-add" value='Add ingredient' onclick="add('add');">
                  </div>
                </div>
              </div>
          </div>
          <!--instructions-->
          <div class="form-group">
            <label>Preparation instructions:</label>
            <textarea name="instruction" class="form-control" id="exampleTextarea" rows="3"> {{ old('instruction')}}</textarea>
          </div>
          <!--number of persons-->
          <div class="form-group">
            <label>Number of persons:</label>
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
            <label>Cuisine:</label>
            <input name="cuisine" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example italian" value = "{{ old('cuisine')}}">
          </div>
          <!-- Time -->
          <div class="form-group">
            <label>Minutes of preparation:</label>
            <input name="prep_time" class="form-control" type="number" id="example-number-input" value = "{{ old('prep_time')}}">
          </div>
          <!-- Image -->
          <label>Image:</label>
            <input type="file" class="form-control-file" name="image_link" id="customFile" value = "{{ old('image_link')}}"><br>
            <input type="submit" class="btn btn-success" value="{{__('Submit')}}"></button>
            <button type="button" class="btn btn-secondary">Go back</button>
          </div>
      </form>
    </div>
  </div>
</div>

<script>

    function popupinfo(){
        alert("\
        mg = Milligram \n\
        g = Gram \n\
        kg = Kilogram \n\
        tsp = Thea spoon \n\
        tbsp = Table spoon \n\
        fl oz = Fluid ounce \n\
        gill = Gill \n\
        ml = Millilitrer \n\
        dl = Deciliter \n\
        l = liter \n\
        bag = bag \n\
        cloves = cloves \n\
        pinch = Pinch \n\
        whole = Whole \n\
        slices = slices \n\
        pieces = Pieces \n\
        ");
    }

  function add(divName) {

    var ingredientid = $('.search').find(':selected')[0].index;
    var ingredientname = $('.search').val();

    if (ingredientname == ""){
        alert("Select ingredient first before pressing add ingredient");
    } else {
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
              <option>slices</option> \
              <option>pieces</option> \
            </select> \
          </div>";

    var deleteRow = document.createElement('span');
        deleteRow.innerHTML = "<i class='fas fa-trash-alt'></i>";
        deleteRow.addEventListener('click',remove);
        newdiv.appendChild(deleteRow);

        document.getElementById(divName).appendChild(newdiv);
  }}

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
