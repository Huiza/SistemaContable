<div class="form-group" style="margin-left: 50px">
	{!!Form::label('fecha','Fecha')!!}
	{!!Form::date('fecha',null,['class'=>'form-control','class'=>'col-xs-5'])!!}
</div><br><br>

<div class="form-group" style="margin-left: 50px">
	{!!Form::label('concepto','Concepto')!!}
	{!!Form::text('concepto',null,['class'=>'form-control','class'=>'col-xs-5'])!!}
</div><br><br>

<div class="form-group" style="margin-left: 50px">
	{!!Form::label('debe','Cuenta debe')!!}
	{!!Form::text('debe',null,['class'=>'form-control','class'=>'col-xs-5'])!!}
</div><br><br>

<div class="form-group" style="margin-left: 50px">
	{!!Form::label('monto_debe','Monto')!!}
	{!!Form::number('monto_debe',null,['class'=>'form-control','class'=>'col-xs-5'])!!}
</div><br><br>

<div class="form-group" style="margin-left: 50px">
	{!!Form::label('haber','Cuenta haber')!!}
	{!!Form::text('debe',null,['class'=>'form-control','class'=>'col-xs-5'])!!}
</div><br><br>

<div class="form-group" style="margin-left: 50px">
	{!!Form::label('monto_haber','Monto')!!}
	{!!Form::number('monto_haber',null,['class'=>'form-control','class'=>'col-xs-5'])!!}
</div><br><br>

