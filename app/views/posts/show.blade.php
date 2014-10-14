@extends('layouts.master')

@section('content')	
	<article>
		<header class="page-header">
			<h1>{{{ $post->title }}}</h1>
			<aside>Written by {{ $post->user->first_name }} {{ $post->user->last_name }}</aside>
		</header>

		<p>{{{ $post->content }}}</p>

		<time>Written {{{ $post->created_at->setTimezone('America/Chicago')->format(Post::FORMAT) }}}</time>
	</article>
	
	
	@if(Auth::check() && Auth::id() == $post->user_id)
		<a class="btn btn-sm btn-primary pull-left" href="{{{ action('PostsController@edit', $post->id) }}}">Edit</a>
		
		{{ Form::open(['method' => 'DELETE', 'action' => ['PostsController@destroy', $post->id]]) }}
			<button type="submit" class="btn btn-sm btn-danger">Delete</button>
		{{ Form::close() }}
	@endif
	<script type="text/javascript" src="js/delete_confirm.js"></script>
@stop