@extends('layouts.master')

@section('content')
		<div class="page-header">
			<h1>Editing...</h1>
		</div>

		{{ Form::model($post, array('action' => ['PostsController@update', $post->id], 'method' => 'put')) }}
		
		@include('posts.form')

		{{ Form::close() }}
@stop