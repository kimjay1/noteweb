@extends('template.template')
@section('body')

<div class="container">
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="well-md">
			<h1>Categorize</h1>

			{{ Form::open(array('route' => 'category.store')) }}  

			<div class="form-group">
				<input type="text" class="form-control" name="type" id="type" placeholder="Genre">
			</div>

				<button class = 'btn btn-primary pull-right'>Add</button>

			{{ Form::close() }} 

		</div>
	</div>
</div>
</div>
@stop