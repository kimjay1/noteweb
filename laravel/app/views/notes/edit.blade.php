@extends('template.template')

@section('body')

<div class="container">
<div class="row">
	<div class="col-md-9 col-md-offset-1">
		<div class="well-md">
			<h1>Edit your note</h1>

			{{ Form::model($notes, array('route' => array('notes.update', $notes->id), 'method' => 'PUT')) }}


			<div class="form-group">
				<input type="text" class="form-control" name="name" id="name" value="{{ $notes->name }}" placeholder="Title">
			</div>

			<div class="form-group">
				<textarea class="form-control" rows="20" name='text' id='text' value="{{ $notes->text }}" placeholder='Type here'></textarea>
			</div>

			<div class="form-group">
				<button class = 'btn btn-success pull-right'>Update</button>
			</div>
			{{ Form::close() }} 

		</div>
	</div>
</div>
</div>


@stop

