@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-register">
                <div class="card-header card-header-register">{{ __('Registration form') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                          <div class="col-md-6">
                            <div class="input-icon">
                              <input id="name" type="text" placeholder="Name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                              <i class="fas fa-user"></i>

                              @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('name') }}</strong>
                                </span>
                              @endif

                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last name') }}</label>
                            
                          <div class="col-md-6">
                            <div class="input-icon">
                              <input id="last_name" type="text" placeholder="Last name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>
                              <i class="fas fa-user-plus"></i>

                              @if ($errors->has('last_name'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                              @endif
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                          <div class="col-md-6">
                            <div class="input-icon">
                              <input id="city" type="text" placeholder="City" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>
                              <i class="fas fa-city"></i>

                              @if ($errors->has('city'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('city') }}</strong>
                                </span>
                              @endif
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                          <div class="col-md-6">
                            <div class="input-icon">
                              <input id="country" type="text" placeholder="Country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required autofocus>
                              <i class="fas fa-globe"></i>

                              @if ($errors->has('country'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('country') }}</strong>
                                </span>
                              @endif
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                          <div class="col-md-6">
                            <div class="input-icon">
                              <input id="email" type="text" placeholder="E-Mail Address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                              <i class="fas fa-at"></i>

                              @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                                </span>
                              @endif
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                          <div class="col-md-6">
                            <div class="input-icon">
                              <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                              <i class="fas fa-user-lock"></i>

                              @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                                </span>
                              @endif
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                          <div class="col-md-6">
                            <div class="input-icon">
                              <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
                              <i class="fas fa-user-lock"></i>
                            </div>
                          </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sign up') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
