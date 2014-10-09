@extends('layouts.master')

@section('content')
	<h1>New Blog Post</h1>

	{{ Form::open(array('action' => array('PostsController@store'), 'method' => 'POST')) }}
		@include('posts.form')
	{{ Form::close() }}
@stop