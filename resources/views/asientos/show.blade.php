@extends('layouts.app')

@section('title','Habitación')

@section('content')
	@if(session('status'))
		<div class="alert alert-success">
			{{ session('status')}}
		</div>
	@endif
	<img style="height: 10px width:15px;background-color: ]#EFEFEF;margin: 20px " class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$habitacion->cuarto}}" alt=""><br>
	<div class="text-center">
		<h1 class="card-title">{{$habitacion->slug}}</h1>
	</div>

@endsection