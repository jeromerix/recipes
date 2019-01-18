@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="offset-md-3 jumbotroncustom">

 <h2>add recipe</h2><hr>
 <div class="form-group">
 <p>Recipe name:</p>
<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Recipe name">
</div>

<div class="form-group">
<p>Method of preparation:</p>
<select class="form-control" id="exampleFormControlSelect1">
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

<div class="form-group">
<p>Sort:</p>
<select class="form-control" id="exampleFormControlSelect1">
    <option>Breakfast</option>
    <option>Dessert</option>
    <option>Dinner</option>
    <option>Lunch</option>
    <option>Snack</option>
    </select>
  </div>
    <div id='add'>
        <div class="row">
            <div class='col'>
                {{ csrf_field() }}

                <input name='ingredient[]' type='search' id="search_ingredient" class='form-control' placeholder='ingredient'>
                <div id="ingredientList"></div>
            </div>
            <div class='col'>
                <input name='amount[]' type='text' class="form-control" placeholder='amount' >
            </div>
            <div class='col'>
                <select class="form-control">
                    <option>g</option>
                    <option>mg</option>
                    <option>kg</option>
                    <option>tbsp</option>
                    <option>tsp</option>
                    <option>fl oz</option>
                    <option>ml</option>
                    <option>dl</option>
                    <option>l</option>
                    <option>gill</option>
                    <option>bag</option>
                    <option>cloves</option>
                    <option>pinch</option>
                    <option>whole</option>
                </select>
            </div>
        </div>
    </div>
  <input type='button' value='Add extra' onclick="add('add');">
<script>
var counter = 1;
function add(divName) {
    var newdiv = document.createElement('tr');
    newdiv.innerHTML = "<div class='row'>\
                            <div class='col'> \
                                <input name='ingredient[]' type='search' class='form-control' placeholder='ingredient'> \
                            </div> \
                            <div class='col'> \
                                <input name='amount[]' type='text' class='form-control' placeholder='amount' > \
                            </div> \
                            <div class='col'> \
                                <select class='form-control'> \
                                    <option>g</option> \
                                    <option>mg</option> \
                                    <option>kg</option> \
                                    <option>tbsp</option> \
                                    <option>tsp</option> \
                                    <option>fl oz</option> \
                                    <option>ml</option> \
                                    <option>l</option> \
                                    <option>dl</option> \
                                    <option>gill</option> \
                                    <option>bag</option> \
                                    <option>cloves</option> \
                                    <option>pinch</option> \
                                    <option>whole</option> \
                                </select> \
                            </div> \
                        </div>"

    document.getElementById(divName).appendChild(newdiv);
}

$(document).ready(function(){

 $('#search_ingredient').keyup(function(){
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#ingredientList').fadeIn();
                    $('#ingredientList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){
        $('#search_ingredient').val($(this).text());
        $('#ingredientList').fadeOut();
    });

});

</script>

  <div class="form-group">
  <p>Units:</p>
  <select class="form-control" id="exampleFormControlSelect1">
      <option>g</option>
      <option>mg</option>
      <option>kg</option>
      <option>tbsp</option>
      <option>tsp</option>
      <option>fl oz</option>
      <option>ml</option>
      <option>dl</option>
      <option>l</option>
      <option>gill</option>
      <option>bag</option>
      <option>cloves</option>
      <option>pinch</option>
      <option>whole</option>
      </select>
    </div>

<div class="form-group">
<p>Preparation instructions:</p>
<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>

<div class="form-group">
<p>Number of persons:</p>
<select class="form-control" id="exampleFormControlSelect1">
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

  <div class="form-group">
  <p>Cuisine:</p>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example italian">
  </div>

  <div class="form-group">
  <p>Minutes of preparation:</p>
  <input class="form-control" type="number" value="45" id="example-number-input">
  </div>
  <p>Image:</p>
  <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile">
  <label class="custom-file-label" for="customFile">Choose image</label>
  <div class="offset-md-3"><br>
  <button type="button" class="btn btn-success">Submit</button>
    <button type="button" class="btn btn-secondary">Go back</button>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection
