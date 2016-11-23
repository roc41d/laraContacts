@extends('layouts.layout')

{{-- web site title --}}
@section('title')
@parent
home
@stop

{{-- website content --}}
@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">

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
            <div class="panel-body">
            	<h2 class="text-muted text-center">Awesome Address Book</h2>
            </div>
      </div>
  </div>
</div> <br /><br /><br />
@stop