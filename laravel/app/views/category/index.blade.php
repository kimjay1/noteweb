
@extends('template.template')

@section('body')
	
<div class="table-responsive">
	<button class='btn bt-active pull-right'></button>
	<table class='table'>
		<tr>
			<th>Category</th>
			<th>Add note</th>
		</tr> 
	@foreach($category as $category)
	 	<tr>
			<td>{{$category->type}}</td>	
			
			<td> <a href="http://localhost:8000/notes/create">add</a> </td>

		</tr>
	@endforeach	
	</table>	
</div>	

@stop

