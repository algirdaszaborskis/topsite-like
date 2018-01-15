@extends('layouts.app')

@section('content')
	
	{{ Form::model($item, array('route' => array('item.update', $category->id), 'method' => 'PUT')) }}
	
		<h1>

			<i class="fa fa-file-text" aria-hidden="true"></i>  Edit Item

			{!! Form::submit('Save', array('class'=>'btn btn-primary', 'style'=>'float:right')) !!}

		</h1>
		
		<hr/>

	

		@include('items.form')

	{!! Form::close() !!}

@stop