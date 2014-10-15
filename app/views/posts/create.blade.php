@extends('layouts.master')

@section('title', 'Creating New Post')

@section('content')
	<h1>New Blog Post</h1>

	{{ Form::open(array('action' => array('PostsController@store'), 'method' => 'POST', 'files' => 'true')) }}
		@include('posts.form')
	{{ Form::close() }}
@stop