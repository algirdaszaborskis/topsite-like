@extends('layouts.app')

@section('content')
Show item page
<div style="float:right">
	<a href="{{url('/item/'.$items_item->id.'/edit')}}" class="btn btn-embossed btn-primary"><span class="glyphicon glyphicon-file"></span>&nbsp;Edit Item</a>
</div>
<div style="float:right">
	<a href="{{url('/item/'.$items_item->id)}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?" class="btn btn-embossed btn-primary"><span class="glyphicon glyphicon-file"></span>&nbsp;Delete Item</a>
</div>
</hr>
</br>
{{$items_item->name}}
</br>
{{$items_item->description}}

@stop