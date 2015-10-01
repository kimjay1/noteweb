
@extends('template.template')

@section('body')
	
<div class="table-responsive">
	<button class='btn bt-active pull-right'></button>
	<table class='table'>
		<tr>
			<th>Category</th>
			<th>Read</th>
			<th>Add note</th>
		</tr> 
	@foreach($category as $category)
	 	<tr>
			<td>{{$category->type}}</td>	
			<td> <a href="http://localhost:8000/notes">View</a> </td>
			<td> <a href="http://localhost:8000/notes/create">add</a> </td>

			<td>{{ Form::open(array('url' => 'category/' . $category->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this Category', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}</td>
		</tr>


	@endforeach	
	</table>	
</div>	

@stop

