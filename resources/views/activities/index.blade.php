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
          <div class="panel-heading">
          	<div class="row">
		        <div class="col-md-6">
		          <h3>My Contacts</h3>
		        </div>
		        <div class="col-md-6">
		          <p class="pull-right">
		          	<a href="" class="btn btn-primary">add new contact</a>
		          </p>
		        </div>
		    </div>

          </div>
            <div class="panel-body">
            	<table class="table table-hover table-condensed">
		            <tr>
		              <th>Name</th>
		              <th>Number</th>
		              <th>Address</th>
		              <th>Action</th>
		            </tr>
		            @foreach($contacts as $contact)
		            <tr>
		              <td>{{$contact->name}}</td>
		              <td>{{$contact->number}}</td>
		              <td>{{$contact->address}}</td>
		                <a href="{{url('admin/editjob/'.$contact->id)}}" class="label label-primary">edit</a>
		                <a href="{{url('admin/editjob/'.$contact->id)}}" class="label label-danger">delete</a>
		              </td>
		            </tr>
		            @endforeach
		          </table>
		          {{$contacts->render()}}
            </div>
      </div>
  </div>
</div> <br /><br /><br />
@stop