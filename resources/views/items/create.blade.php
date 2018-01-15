@extends('layouts.app')

@section('content')
	
	{!! Form::open(['action' => 'TopItemsController@store']) !!}
	
		<h1>

			<i class="fa fa-file-text" aria-hidden="true"></i>  New Item


		</h1>
		
		<hr/>

	

		@include('items.form')

			{!! Form::submit('Save', array('class'=>'btn btn-primary', 'style'=>'float:right')) !!}
		

	{!! Form::close() !!}

@stop