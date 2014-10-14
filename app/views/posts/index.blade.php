@extends('layouts.master')

@section('content')
	<div class="page-header">
		<h1>Frank's Blug</h1>
		@if(Input::has('search'))
			<h2>Searching for "{{{ Input::get('search') }}}"</h2>
		@endif
	</div>
		
	@foreach ($posts as $post)
		<div class="row">
			<div class="col-md-4">
				<article>
					<h2>{{{ $post->title }}}</h2>

					<aside>Written by {{ $post->user->first_name }} {{ $post->user->last_name }}</aside>
					
					<time>{{{ $post->created_at->setTimezone('America/Chicago')->format(Post::FORMAT) }}}</time>
					
					<p>{{{ substr($post->content, 0, 250) . "..." }}}</p>
				</article>
				
				<a class="btn btn-primary btn-sm" href="{{{ action('PostsController@show', $post->id) }}}">Read More</a>
			</div>
		</div>
	@endforeach
	
	<div class="container">

		{{ $posts->appends(array('search' => Input::get('search')))->links() }}
	</div>
@stop