@extends('layouts.master')

@section('content')
	<h1>This is my resume</h1>
	<a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a>
@stop