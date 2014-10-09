<?php

class Post extends BaseModel {
	protected $table = 'posts';

	const FORMAT = 'l, F jS Y @ h:i:s A';

	public static $rules = [
		'title' => 'required|max:255',
		'content' => 'required'
	];	
}