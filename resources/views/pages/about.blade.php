@extends('layouts.app')

@section('content')
  <div class="container">
    <div>
      <div class="row">
        <div class="col-sm-6 col-x1-2">
          <h2 class="title-about">About us</h2><hr>
          <p class="about-text">We are Sherlockfood, the website to search your favorite food online.<br>
  The purpose of this site is to see what recipes you can cook with the supplies you have available in your fridge.<br>
  You can also use the website to search for new types of food from all over the world.<br>
  It is also possible to add your own recipe.<br>
  For each recipe you can find the requirements and the method of preparation.<br>
  Create your recipe with the help of this website, and share it with family and friends.</p>
       </div>
      <div class="col-sm-6 col-x1-2">
        <h2 class="title-about">The team</h2><hr>
        <p class="about-text">The people who worked on this site are Mansour, Patrick, Kees and Jerome.<br>
  We formed our team for the programming course at CodeGorilla, creating this website was our final project.<br>
  Our team was quite enthusiastic about this concept, it was a new challange for us.<br>
  The knowledge we got from the programming course is used to help us create Sherlockfood.</p>
  <img src="{{ URL::to('/images/codegorilla.png') }}" alt="codegorillalogo" class="img-thumbnail">
      </div>

  <!-- Force next column to break to new line -->
    <div class="w-100"></div>

    <div class="col">
      <br><h2 class="title-about">The Project</h2><hr>
      <p class="about-text">The idea behind the website came from Patrick, the layout setup was done by Mansour.<br>
  Everyone in our team is was assigned to a different task.<br>
  We had one month to setup the website.<br>
  With this in mind our website Sherlock food has been created.</p>
      </div>
      </div>
    </div>
  </div>
@endsection
