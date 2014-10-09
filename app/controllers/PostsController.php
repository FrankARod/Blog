<?php

class PostsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(4);
		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// $validator = Validator::make(Input::all(), Post::$rules);
		// if ($validator->fails()) {
		// 	return Redirect::action('PostsController@create')->withInput()->withErrors($validator);
		// } else {
		// 	$post = new Post();
		// 	$post->title = Input::get('title');
		// 	$post->content = Input::get('content');
		// 	$post->save();
		// 	return Redirect::action('PostsController@index');
		// }

		return $this->update(null);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		if (!$post) {
			App::abort(404);
		}
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = new Post();

		if ($id)
		{
			$post = Post::find($id);
			
		}

		$validator = Validator::make(Input::all(), Post::$rules);
		if ($validator->fails()) {
			Session::flash('errorMessage', 'Post Unsuccessful');
			Log::info("Title: " . Input::get('title') . ", Content: " . Input::get('content'));
			if ($id) {
				return Redirect::action('PostsController@edit', $id)->withErrors($validator);
			}
			return Redirect::action('PostsController@create')->withInput()->withErrors($validator);
		} else {
			$post->title = Input::get('title');
			$post->content = Input::get('content');
			$post->save();
			Session::flash('successMessage', 'Post Successful!');
			return Redirect::action('PostsController@index');
		}
	}

	// Move redundant code from update and store


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return 'This should delete a specific post';
	}


}
