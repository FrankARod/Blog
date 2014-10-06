@extends('layouts.master')

@section('content')
	<?
		if ($guess == $face_number) {
			echo "$guess was correct!";
		} else {
			echo "WRONG! The correct answer was $face_number";
		}
	?>
@stop