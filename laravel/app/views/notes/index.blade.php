@extends('template.template')

@section('body')
<div class="table-responsive">
 <!-- 	<button class='btn btn-active pull-right'><a href='colleges/create'>Add College</a></button> -->
	<table class = "table table-hover">
		<tr>
			<th>Title</th>
			<th>Text</th>
		</tr>
		@foreach($colleges as $college)
		<tr>
			<td><a href="colleges/{{$college->id}}">{{$college->collegename}}</a></td>
			<td>{{$college->abbreviation}}</td>
		</tr>
		@endforeach
	</table>
</div>
@stop