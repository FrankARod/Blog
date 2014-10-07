@extends('layouts.master')

	@section('content')
		<h1>This is my portfolio</h1>
		<a href="{{{ action('HomeController@showResume') }}}">Resume</a>
	@stop