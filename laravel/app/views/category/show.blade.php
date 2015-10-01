@extends('template.template')

@section('body')

<div class="container">
<div class="panel panel-default">
  <div class="panel-body"><h3>{{ $category->type }}</h3>
 
  	 {{ Form::open(array('url' => 'category/' . $category->id, 'class' => 'pull-right')) }}
          {{ Form::hidden('_method', 'DELETE') }}
          {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}

     {{ Form::close() }}
    <button type="button" class='btn btn-default pull-right'><a href='{{ $category->id }}/edit'>Edit</a></button>

  </div>
</div>
</div>

@stop