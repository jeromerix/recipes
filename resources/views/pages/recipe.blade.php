@extends('layouts.app')

@section('content')
  <header>
    <div class="recipe-header" style="background-image: url('{{ $recipe->image_link}}');">
    </div>
  </header>
  <div class="container">
    <div class="content-box-l">
      <section class="main-section">
        <div class="item-box box-bg">
          <div class="row row-bottom-space">
            <div class="col-md-6">
              <figure class="recipe-img">
                <img src="{{ $recipe->image_link }}">
              </figure>
            </div>
            <h1 class="recipe-title">{{ $recipe->name }}</h1>
            <div class="col-md-6">
              <div><p>Uploaded by:<strong> &nbsp&nbsp John Doe</strong></p></div>
              <div class="row  text-center">
                <div class="col col-no-pad">
                  <ul class="recipe-info">
                    <li><i class="far fa-clock"></i><span class="recipe-info-txt">{{ $recipe->prep_time }} min</span></li>
                    <li><i class="fas fa-male"></i><span class="recipe-info-txt">{{ $recipe->how_many}}</span></li>
                    <li><i class="fas fa-globe-asia"></i><span class="recipe-info-txt">{{ $recipe->cuisine }}</span></li>
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
                  <form class="form-inline my-2 my-lg-0" action="{{route('recipes.edit',$recipe->id)}}" method="GET">
                      {{ csrf_field() }}
                      <input type="hidden" name="id" value = "{{$recipe->id}}">
                      <button type="submit">Edit</button>
                  </form>


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
                  @foreach($recipe->ingredients as $ingredient)
                  <li class="list-group-item">{{ $ingredient->pivot->amount }} {{ $ingredient->pivot->unit }} {{ $ingredient -> ingredient }}</li>
                  @endforeach
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <h2 class="h-content">
              Method of preparation: {{ $recipe->method }}
            </h2>
            <div class="method-text">
              <p>
                {{ $recipe->instruction }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="row">
        <div class="col-md-12">
          <div class="item-box comment-section">
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. 
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection
