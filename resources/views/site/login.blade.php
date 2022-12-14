@extends('layouts.base')

@section('main')
<div class="section"></div>
  <main>
    <center>
      <h5 class="indigo-text">Please, login into your account</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" action="{{ route('site.login') }}" method="post">
            @csrf
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' />
                <label for='email'>Enter your email</label>
                {{ $errors->has('email') ? $errors->first('email') : ''}}
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
                {{ $errors->has('password') ? $errors->first('password') : ''}}
              </div>
              <label style='float: right;'>
								<a class='pink-text' href='#!'><b>Forgot Password?</b></a>
							</label>
            </div>
            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>
  </main>
<div style="margin-left: 40px; margin-right: 40px;">
    <h3>  Choose Another Option </h3>
    <ul class="collection with-header">
        <li class="collection-header"> 
            Click here
        </li>
        <li class="collection-header">
            <a href="{{ route('site.index') }}"> Homepage </a>
        </li>
        <li class="collection-header">
            <a href="{{ route('site.login') }}"> Login </a>
        </li>
        <li class="collection-header">
            <a href="{{ route('app.admin') }}"> Admin </a>
        </li>
    </ul>
</div>
<br>
@endsection