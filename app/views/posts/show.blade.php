@extends('layouts.master')

@section('content')	
	<article>
		<header class="page-header">
			<h1>{{{ $post->title }}}</h1>
		</header>

		{{{ $post->content }}}

	</article>
	
	<p>Written {{{ $post->created_at->setTimezone('America/Chicago')->format(Post::FORMAT) }}}</p>
	
	<a class="btn btn-sm" href="{{{ action('PostsController@edit', $post->id) }}}">Edit</a>
	{{ Form::open(['method' => 'DELETE', 'action' => ['PostsController@destroy', $post->id]]) }}
		<button type="submit" class="btn btn-sm btn-danger">Delete</button>
	{{ Form::close() }}

@stop