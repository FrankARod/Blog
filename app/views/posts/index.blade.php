@extends('layouts.master')

@section('title', 'Frank\'s Blog')

@section('content')
	<div class="page-header">
		<h1>Frank's Blug</h1>
		
		@if(Input::has('search'))
			<h2>Searching for "{{{ Input::get('search') }}}"</h2>
		@endif
	</div>
	<div class="container">	
		@foreach ($posts as $post)
				<div class="col-md-6">
					<article>
						@if($post->image)
							<div>
								<img src="{{{ $post->image }}}" class="img-thumbnail img-responsive">
							</div>
						@endif
						<h2>{{{ $post->title }}}</h2>

						<aside>Written by {{{ $post->user->first_name }}} {{{ $post->user->last_name }}}</aside>
						
						<time>{{{ $post->created_at->setTimezone('America/Chicago')->format(Post::FORMAT) }}}</time>
						
						<p>{{{ substr($post->content, 0, 250) . "..." }}}</p>
					</article>
					
					<a class="btn btn-primary btn-sm" href="{{{ action('PostsController@show', $post->id) }}}">Read More</a>
				</div>
		@endforeach	
	</div>
	{{ $posts->appends(array('search' => Input::get('search')))->links() }}	
@stop