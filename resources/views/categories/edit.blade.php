@extends('layouts.app')

@section('content')
	
	{{ Form::model($top_category, array('route' => array('top.update', $top_category->id), 'method' => 'PUT')) }}
	
		<h1>

			<i class="fa fa-file-text" aria-hidden="true"></i>  Edit Category

			{!! Form::submit('Save', array('class'=>'btn btn-primary', 'style'=>'float:right')) !!}

		</h1>
		
		<hr/>

	

		@include('categories.form')

	{!! Form::close() !!}

@stop