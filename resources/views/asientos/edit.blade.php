@extends('layouts.app')

@section('title', 'Editar habitación')

@section('content')
	{!! Form::model($asiento,['route'=>['asiento.update',$asiento],'method'=>'PUT','files'=>true])!!}

		@include('asientos.form')
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}

	{!!Form::close()!!}
@endsection