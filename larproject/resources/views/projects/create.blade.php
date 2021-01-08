@extends('layout')

@section('content')
	<h1>Create a new project</h1>

	<form method="POST" action="/projects">
		{{csrf_field()}}
		<div>
			<input type="text" name="title" placeholder="Project title" value="{{ old('title') }}">
		</div>

		<div>
			<textarea name="description" placeholder="Project description" class="textarea {{ $errors->has('title') ? 'is-danger' : '' }}" >{{ old('description') }}</textarea>
		</div>

		<div>
			<button type="submit">Create Project</button>
		</div>

		@include('errors/errors')
	</form>
@endsection