@extends('layouts.app')

@section('title','Listado de asientos')

@section('content')

<form class="form-group">
		<a href="#"><button class="btn btn-primary" type="submit">Buscar</button></a>
		<a class="btn btn-primary" href="{{ route('asiento.create') }}" type="submit"> Nuevo asiento contable</a>
</form>

<br><br>

<table class="table table-bordered table-hover ">
	<thead>
		<tr>
			<th>n° Asiento</th>
			<th>Fecha</th>
			<th>Concepto</th>
			<th>Cuenta debe</th>
			<th>Monto</th>
			<th>Cuenta haber</th>
			<th>Monto</th>


		</tr>
	</thead>

	<tbody>
		@foreach($asientos as $asiento)
		<tr>
			<td>{{$asiento->id}}</td>
			<td>{{$asiento->libroDiario->fecha}}</td>
			<td>{{$asiento->libroDiario->concepto}}</td>
			<td>{{$asiento->cuentaDebe}}</td>
			<td>{{$asiento->importe_debe}}</td>
			<td>{{$asiento->cuentaHaber}}</td>
			<td>{{$asiento->importe_haber}}</td>
		</tr>
		@endforeach	
	</tbody>
</table>
@endsection
