
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
<<<<<<< HEAD
			
			<td> <button class = "btn btn-active"><a href="http://localhost:8000/notes/create">Add</a></button></td>

=======
			<td> <a href="http://localhost:8000/notes">View</a> </td>
			<td> <a href="http://localhost:8000/notes/create">add</a> </td>
>>>>>>> a516496da521b293d8133581c2fd63fbb8ed3b2d
		</tr>
	@endforeach	
	</table>	
</div>	

@stop

