@extends('layouts.master')

@section('title', 'Dice Roll')

@section('content')
	@if ($guess == $face_number)
			{{{ "$guess was correct!" }}}
	@else
			{{ "WRONG! The correct answer was $face_number" }}
	@endif
@stop