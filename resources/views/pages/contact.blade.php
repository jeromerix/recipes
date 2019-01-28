@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm"></div>
      <div class="col-sm-6 col-x1-2 formclass">
        <div class="jumbotroncontact">
          <h1 class="test">Contact <i class="fas fa-envelope-square"></i></h1><hr>
            <p class="contacttxt">Got a question? We'd love to hear from you. Send us a Message<br>
          and we'll respond as soon as possible.</p>
            <form>
              <div class="form-group row">
                <label for="formGroupExampleInput">Name</label>
                <input type="text" class="form-control" placeholder="Name">
              </div>
                <div class="form-group row">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                  <div class="form-group row">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                  <button type="button" class=" btn btn-custom">Send</button>
                </div>
            </form>
          </div>
            <div class="col-sm"></div>
        </div>
      </div>
@endsection
