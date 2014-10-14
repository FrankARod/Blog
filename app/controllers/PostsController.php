<?php

class PostsController extends BaseController {

	public function __construct()
	{
		// call base controller constructor
		parent::__construct();

		// run auth filter before all methods on this controller except index and show
		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Input::has('search')) {
			$search = Input::get('search');
			$query = Post::with('user');
			$query->where('title', 'like', "%$search%");
			$query->orWhere('content', 'like', "%$search%");
			$posts = $query->orderBy('created_at', 'DESC')->paginate(4);
		} else {
			$posts = Post::with('user')->orderBy('created_at', 'DESC')->paginate(4);
		}

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
		$post = Post::with('user')->find($id);
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
			$post->user_id = Auth::id();
			$post->save();
			Session::flash('successMessage', 'Post Successful!');
			return Redirect::action('PostsController@index');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		if (!$post) {
			App::abort(404);
		}
		$post->delete();
		Log::info("Deleted post $id");
		Session::flash('successMessage', 'Post deleted successfully');
		return Redirect::action('PostsController@index');
	}
}
