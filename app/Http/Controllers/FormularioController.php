<?php

namespace App\Http\Controllers;

use App\formulario;
use App\Http\Requests\formulariorequest;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(formulariorequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function show(formulario $formulario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function edit(formulario $formulario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, formulario $formulario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function destroy(formulario $formulario)
    {
        //
    }
}
