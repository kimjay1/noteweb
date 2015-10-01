@extends('template.template')

@section('body')

<div class="container">
<div class="panel panel-default">
  <div class="panel-body"><h3>{{ $notes->text }}</h3></div>
</div>

@stop