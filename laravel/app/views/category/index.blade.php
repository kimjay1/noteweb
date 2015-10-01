
@extends('template.template')

@section('body')
	
<div class="table-responsive">
	
	<table class='table'>
		<tr>
			<th>Category</th>
			<th>Read</th>
			<th>Add note</th>
		</tr> 
	@foreach($category as $category)
	 	<tr>
			<td>{{$category->type}}</td>	
			<td> <button class = "btn btn-active"><a href="http://localhost:8000/notes">View</a></button></td>
			<td> <button class = "btn btn-active"><a href="http://localhost:8000/notes/create">Add</a></button></td>		
		</tr>
	@endforeach	
	</table>	
</div>	

@stop

