<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AsientoContable;
use App\cuenta;
use App\Http\Requests\StoreAsientoContableRequest;

class AsientoContableController extends Controller
{/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Muestra el lstado de todos los asientos despues de iniciar sesión y depues de guardar un asiento contable
        $asientos=asientoContable::all();
        return view('asientos.index', compact('asientos'));
        //all: Consulta todos las asientos
        //compact:Arrays de recursos


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        #En esta vista se crea el objeto del asiento contable
        return view('asientos.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAsientoContableRequest $request)

    {
        #En esta función se guardan los atributos del objeto yy luego retorna a la vista del listado de
        #asientos
        $asientoContable = new asientoContable();
        $asientoContable->libroDiario->fecha=$request->input('fecha');
        $asientoContable->libroDiario->concepto=$request->input('concepto');
        $asientoContable->cuentaDebe=$request->get('debe');
        $asientoContable->importe_debe=$request->input('monto_debe');
        $asientoContable->cuentaHaber=$request->get('haber');
        $asientoContable->importe_haber=$request->input('monto_haber');
        $asientoContable->save();
      
        return redirect()->route('asientoContable.index');
      //return $request->all();  //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(asientoContable $asientoContable)
    {
        /*Aplicando slug
        $asientoContable= asientoContable::where('slug','=',$slug)->firstOrFail();*/
        //$asientoContable= asientoContable::find($id);
        return view('asientos.show',compact('asientoContable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(asientoContable $asientoContable)
    {
        /*En esta función es para poder editar un asiento contable*/
        return view('asientos.edit', compact('asientoContable'));

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, asientoContable $asientoContable)
    {
        /*Se actualizan los datos del asiento contable*/
        $asientoContable->libroDiario->fecha=$request->input('fecha');
        $asientoContable->libroDiario->concepto=$request->input('concepto');
        $asientoContable->cuentaDebe=$request->get('debe');
        $asientoContable->importe_debe=$request->input('monto_debe');
        $asientoContable->cuentaHaber=$request->get('haber');
        $asientoContable->importe_haber=$request->input('monto_haber');
        $asientoContable->save();
        return redirect()->route('asientoContable.index',[$asientoContable])->with('status','asiento actualizado correctamente');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(asientoContable $asientoContable)
    {
        /*Se elimina el objeto*/
        $asientoContable->delete();
        return redirect()->route('asientoContable.index');
    }
}
