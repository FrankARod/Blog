@extends('layouts.master')

@section('content')
	<h1>Login</h1>
	
	<div class="col-md-4">
		{{ Form::open(array('action' => array('HomeController@doLogin'), 'method' => 'POST')) }}
		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Enter your Email', 'value' => Input::old('email'))) }}
		</div>
		
		<div class="form-group">
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password', null, array('class' => 'form-control', 'placeholder' => 'Enter your Password')) }}
		</div>

		{{ Form::submit('Login', array('class' => 'btn btn-primary')) }}
		{{ Form::close() }}
	</div>

	<div class="clearfix"></div>
@stop