@extends('layouts.master')

@section('title', 'Editing Post')

@section('content')
		<div class="page-header">
			<h1>Editing...</h1>
		</div>

		{{ Form::model($post, array('action' => ['PostsController@update', $post->id], 'method' => 'put', 'files' => 'true')) }}
		
		@include('posts.form')

		{{ Form::close() }}
@stop