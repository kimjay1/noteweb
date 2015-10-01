@extends('template.template')

@section('body')

<div class="container">
<div class="row">
	<div class="col-md-9 col-md-offset-1">
		<div class="well-md">
			<h1>Edit your Category</h1>

			{{ Form::model($category, array('route' => array('category.update', $category->id), 'method' => 'PUT')) }}


			<div class="form-group">
				<input type="text" class="form-control" name="type" id="type" value="{{ $category->type }}" placeholder="">
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

