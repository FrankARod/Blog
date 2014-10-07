@extends('layouts.master')

@section('content')
	<h1>New Blog Post</h1>

	<form method="POST" action="{{{ action('PostsController@store') }}}">
		<label for="title">Title</label>
		<input id="title" name="title" type="text" placeholder="Title" value="{{{ Input::old('title') }}}">
		
		<label for="content"></label>
		<textarea id="content" name="content" value="{{{ Input::old('content') }}}"></textarea>
		
		<input type="submit">
	</form>
@stop