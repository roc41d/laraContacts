@extends('layouts.layout')

{{-- web site title --}}
@section('title')
@parent
home
@stop

{{-- website content --}}
@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">

      @if(Session::has('alertMessage'))
      <div class="alert alert-dismissable alert-success">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{Session::get('alertMessage')}}</strong>
      </div>
      @endif

      @if(Session::has('alertError'))
      <div class="alert alert-dismissable alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{Session::get('alertError')}}</strong>
      </div>
      @endif

      <div class="panel panel-default">
          <div class="panel-heading"><h3>LogIn</h3></div>
              <div class="panel-body">

              @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>{{ implode('', $errors->all('<p>:message</p>')) }}</strong>
                </div>
              @endif 
                  <form action="{{url('login')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <div class="form-group">
                          <label for="inputUsername" class="control-label">Username</label>
                          <div class="">
                              <input type="text" class="form-control" id="inputUsername" name="username" placeholder="rocardho75" autofocus>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputPassword" class="control-label">Password</label>
                          <div class="">
                            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="********">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="">
                              <!--<a href="{{URL::to('remind')}}" class="btn btn-danger">Forgot Password</a>-->
                              <button type="submit" class="btn btn-primary pull-right">Log in</button>
                          </div>
                      </div>
                  <form/>
              </div>
      </div>
  </div>
</div> <br /><br /><br />

@stop