<div class="form-group">
	{{ Form::label('title', 'Title') }}
	
	{{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Title of Blog Post', 'value' => Input::old('title'))) }}
	
	{{ $errors->first('title', '<div><p class="alert alert-danger pull-left">:message</p></div>') }}
</div>

<div class="form-group">
	{{ Form::label('content', 'Content') }}
	
	{{ Form::textarea('content', null, array('class' => 'form-control', 'placeholder' => 'Content of Blog Post', 'value' =>Input::old('title'))) }}
	
	{{ $errors->first('content', '<div><p class=" alert alert-danger pull-left">:message</p></div>') }}
</div>

{{ Form::submit('Post', array('class' => 'btn btn-primary')) }}