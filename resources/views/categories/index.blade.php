@extends('layouts.app')

@section('content')

@foreach($top_categories as $top)
{{$top->name}}
</br>
<div style="float:right">
	<a href="{{url('/top/'.$top->id)}}" class="btn btn-embossed btn-primary"><span class="glyphicon glyphicon-file"></span>Show Category</a>
</div>
@endforeach

@stop