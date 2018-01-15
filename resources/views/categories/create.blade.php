@extends('layouts.app')

@section('content')
	
	{!! Form::open(['action' => 'TopCategoriesController@store']) !!}
	
		<h1>

			<i class="fa fa-file-text" aria-hidden="true"></i>  New Category


		</h1>
		
		<hr/>

	

		@include('categories.form')

			{!! Form::submit('Save', array('class'=>'btn btn-primary', 'style'=>'float:right')) !!}
		

	{!! Form::close() !!}

@stop