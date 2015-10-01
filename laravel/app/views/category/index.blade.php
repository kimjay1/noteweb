
@extends('template.template')

@section('body')
	
<div class="table-responsive">
	<div class="col-md-6 col-md-offset-3">
			<table class='table'>
				<tr>
					<th>Category</th>
					<th>Edit</th>
				</tr> 
			@foreach($category as $category)
			 	<tr>

					<td> 
							
							<a href="http://localhost:8000/notes">{{$category->type}}</a> 
							
					</td>		
					<td> 

							<a href="category/{{ $category->id }}">Edit</a>

					</td>

					<td>

						{{ Form::open(array('url' => 'category/' . $category->id, 'class' => 'pull-right')) }}
		                    {{ Form::hidden('_method', 'DELETE') }}
		                    {{ Form::submit('Delete this Category', array('class' => 'btn btn-warning')) }}
						{{ Form::close() }}

					</td>
				</tr>
	</div>	

	@endforeach	
	</table>	
	<div class="col-md-6">
		<button class = 'btn btn-default pull-right'><a href="http://localhost:8000/category/create">Add a category</a></button>
	</div>
</div>	

@stop

