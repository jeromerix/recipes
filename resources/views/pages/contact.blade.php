@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-6 contact-logo-flex">
        <div class="d-flex align-items-center">
          <img id="contact-logo" src="{{ URL::to('/images/logo-01.png') }}">
        </div>
      </div>
      <div class="col-sm-6 col-x1-2 formclass">
        <div class="jumbotroncontact">
          <h1 class="test">Contact <i class="fas fa-envelope-square"></i></h1><hr>
            <p class="contacttxt">Got a question? We'd love to hear from you. Send us a Message<br>
              and we'll respond as soon as possible.</p>
              @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <ul>
                      @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
              @endif
              @if($message = Session::get('succes'))
              <div class="alert alert-succes alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{ $message }}</strong>
              </div>
              @endif
            <form method="POST" action="{{url('contact/send')}}">
              {{ csrf_field() }}
              <div class="form-group row">
                <label for="formGroupExampleInput">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name">
              </div>
                <div class="form-group row">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" name="Email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                  <div class="form-group row">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" name="message" rows="3"></textarea>
                  </div>
                  <button type="submit" name="send" class=" btn btn-custom" value="Send">Send</button>
                </div>
            </form>
          </div>
            <div class="col-sm"></div>
        </div>
      </div>
@endsection
