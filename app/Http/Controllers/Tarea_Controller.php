<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

use App\Http\Requests\TareaRequest;


class Tarea_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $tareas = Tarea::where('as',2)->orderByDesc('id');*/
        $tareas = Tarea::orderByDesc('id')->get();
        /* $params = [
            'tareas' => $tareas
        ] */
        return view('tarea.index', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        # Informacion de variables
        #dd('hola');
        return view('tarea.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TareaRequest $request)
    {
        /* $datos = $request->validate(
            [
                'nombre' => 'required|max:60',
                'descripcion' => 'nullable|max:255',
                'finalizada' => 'nullable|numeric|min:0|max:1',
                'urgencia' => 'required|numeric|min:0|max:2',
                'fecha_limite' => 'required|date_format:Y-m-d\TH:i'
            ]); */
        $datos = $request->validated();
        $tarea = Tarea::create( $datos );
        return redirect()->route('tarea.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        return view('tarea.edit', compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(TareaRequest $request, Tarea $tarea)
    {
        $datos = $request->validated();
        $tarea -> update($datos);
        return redirect()->route('tarea.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        //
    }
}
