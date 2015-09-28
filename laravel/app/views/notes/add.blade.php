@extends('template.template')

@section('body')

<div class="container">
<div class="row">
	<div class="col-md-9 col-md-offset-1">
		<div class="well-md">
			<h1>Enter Your Notes Here</h1>

			{{ Form::open(array('route' => 'notes.store')) }}  

			<div class="form-group">
				<input type="text" class="form-control" name="name" id="name" placeholder="Title">
			</div>

			<div class="form-group">
				<textarea class="form-control" rows="20" name='text' id='text' placeholder='Type here'></textarea>
			</div>

			<div class="form-group">
				<button class = 'btn btn-primary pull-right'>Publish</button>
			</div>
			{{ Form::close() }} 

		</div>
	</div>
</div>
</div>


@stop

