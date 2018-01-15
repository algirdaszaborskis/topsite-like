@extends('layouts.app')

@section('content')
Show category page
<div style="float:right">
	<a href="{{url('/top/'.$top_category->id.'/edit')}}" class="btn btn-embossed btn-primary"><span class="glyphicon glyphicon-file"></span>Edit Category</a>
</div>
<div style="float:right">
	<a href="{{url('/top/'.$top_category->id)}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?" class="btn btn-embossed btn-primary"><span class="glyphicon glyphicon-file"></span>Delete Category</a>
</div>
</hr>
</br>
{{$top_category->name}}
</br>
{{$top_category->description}}

</hr>
<div style="float:right">
	<a href="{{url('/item/create?category_id='.$top_category->id)}}" class="btn btn-embossed btn-primary"><span class="glyphicon glyphicon-file"></span>&nbsp;Create Item</a>
</div>
@if(!empty($top_items))
@foreach ($top_items as $item)
{{$item->name}}
</br>
<div style="float:right">
	<a href="{{url('/item/'.$item->id)}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?" class="btn btn-embossed btn-primary"><span class="glyphicon glyphicon-file"></span>Delete Item</a>
</div>
<div style="float:right">
	<a href="{{url('/item/'.$item->id)}}" class="btn btn-embossed btn-primary"><span class="glyphicon glyphicon-file"></span>Show Item</a>
</div>
<div style="float:right">
	<a href="{{url('/item/'.$item->id.'/edit')}}" class="btn btn-embossed btn-primary"><span class="glyphicon glyphicon-file"></span>Edit Item</a>
</div>
@endforeach
@endif
@stop