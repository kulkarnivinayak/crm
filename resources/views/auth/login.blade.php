@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:3%;">
  <div class="row">
    <form class="col s12" role="form" method="POST" action="{{ url('/login') }}">
      {{ csrf_field() }}
      <div class="card-panel">
      <h3>Login</h3>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus>
          <label for="email" data-error="{{ $errors->first('email') }}" data-success="valid email address">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password" required> 
          <label for="password" data-error="{{ $errors->first('password') }}" data-success="valid password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type="checkbox" id="remember" name="remember" />
          <label for="remember">Remember Me</label>
        </div>
      </div>
      <div class="card-action">
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="waves-effect waves-light btn" onsubmit="Materialize.toast('You\'ve Successfully Logged In.', 4000)">Login <i class="material-icons right">send</i></button>
            <a class="waves-effect waves-light btn" href="{{ url('/password/reset') }}">Forgot Password?</a>
          </div>
        </div>
      </div>
      </div>
    </form>
  </div>
</div>

@endsection
