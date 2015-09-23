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
				<input type="text" rows="20" class="form-control" name="text" id="text" placeholder="Type here">
			</div>
			
				<button class = 'btn btn-primary pull-right'>Publish</button>

			{{ Form::close() }} 

		</div>
	</div>
</div>
</div>


@stop

