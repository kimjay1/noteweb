@extends('template.template')

@section('body')
<div class="container">
<div class="row">
	<div class="table-responsive">
 <!-- 	<button class='btn btn-active pull-right'><a href='colleges/create'>Add College</a></button> -->
		<table class = "table table-hover table-bordered">
			<tr>
				<th>Title</th>
			</tr>
			@foreach($notes as $note)
			<tr>
				<td> <a href="notes/{{ $note->id }}">{{ $note->name }}</a></td>
			</tr>
			@endforeach
		</table>
		<a href="http://localhost:8000/category">View Categories</a> </br>
	</div>
</div>	
</div>
@stop