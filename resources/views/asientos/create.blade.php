@extends('layouts.app')

@section('title', 'Nuevo asiento contable')

@section('content')
	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div
	@endif
	
	{!! Form::open(['route'=>'asiento.store','method'=>'POST']) !!}

		@include('asientos.form')
		{!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
	
	{!! Form::close() !!}
@endsection