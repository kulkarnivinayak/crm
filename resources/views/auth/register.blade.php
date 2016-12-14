@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
      {{ csrf_field() }}
      <!-- <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">Name</label>
        <div class="col-md-6">
          <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus> 
          @if ($errors->has('name'))
          <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span> 
          @endif
        </div>
      </div>
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">E-Mail Address</label>
        <div class="col-md-6">
          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required> 
          @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span> 
          @endif
        </div>
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">Password</label>
        <div class="col-md-6">
          <input id="password" type="password" class="form-control" name="password" required> @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span> 
          @endif
        </div>
      </div>
      <div class="form-group">
        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
        <div class="col-md-6">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
          <button type="submit" class="btn btn-primary">
            Register
          </button>
        </div>
      </div> -->
      <div class="card-panel">
      <h3>Register</h3>
      <div class="row">
        <div class="input-field col s12">
          <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
          <label for="name" data-error="{{ $errors->first('password') }}" data-success="valid password">Your Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required> 
          <label for="email" data-error="{{ $errors->first('password') }}" data-success="valid password">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="form-control" name="password" required>
          <label for="password" data-error="{{ $errors->first('password') }}" data-success="valid password">Enter Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          <label for="password-confirm" data-error="{{ $errors->first('password') }}" data-success="valid password">Repeat Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <button type="submit" class="waves-effect waves-light btn" onsubmit="Materialize.toast('You\'ve Successfully Signed Up', 4000)">Signup <i class="material-icons right">input</i></button>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection
