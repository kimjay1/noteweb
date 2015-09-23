@extends('template.template')

@section('body')

<div class="row">




	<div class="col-xs-12 col-md-3 col-md-offset-4">


		{{Form::open(array('route' => 'category.store'))}}

	  	<div class="form-group">
	   	 	<label>Category Name</label>
	    	<input type="text" class="form-control" name="type" id="type">
	 	 </div>
	
		<button class='btn btn-primary'>Add</button>

		{{Form::close()}}


</div>	

@stop