@extends('template.template')

@section('body')
	
<div class="table-responsive">
	<button class='btn bt-active pull-right'></button>
	<table class='table'>
		<tr>
			<th>Category</th>
		</tr> 
	@foreach($category as $category)
	 	<tr>
			<td>
			{{$category->type}}	
			</td>
		</tr>
	@endforeach	
	</table>	
</div>	

@stop
