@extends('layouts.layout')

{{-- web site title --}}
@section('title')
@parent
register
@stop

{{-- website content --}}
@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-default">
          <div class="panel-heading"><h3>Create Account</h3></div>
              <div class="panel-body">
                  <form action="{{url('register')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <div class="form-group">
                          <label for="inputEmail" class="control-label">Username</label>
                          <div class="">
                            <input type="text" class="form-control" id="inputEmail" name="username" value="{{old('username') != NULL ? old('username') : '' }}" placeholder="rocardho95" autofocus>
                            <span class="badge alert-danger">{{ ($errors->has('username') ? $errors->first('username') : '') }}</span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail" class="control-label">Password</label>
                          <div class="">
                            <input type="password" class="form-control" id="inputEmail" name="password" placeholder="********">
                            <span class="badge alert-danger">{{ ($errors->has('password') ? $errors->first('password') : '') }}</span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail" class="control-label">Comfirmed Password</label>
                          <div class="">
                            <input type="password" class="form-control" id="inputEmail" name="comfirmed_password" placeholder="********">
                            <span class="badge alert-danger">{{ ($errors->has('comfirmed_password') ? $errors->first('comfirmed_password') : '') }}</span>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="">
                            <button type="submit" class="btn btn-primary pull-right">Create</button>
                          </div>
                      </div>
                  </form>
              </div>

      </div>
  </div>

</div> <br />
@stop