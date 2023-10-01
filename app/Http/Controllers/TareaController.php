<?php

namespace App\Http\Controllers;

use App\tareas;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('tareas.index'); //para web, no api
        $tareas = tareas::all();
        //return $tareas to json response
        return response()->json($tareas);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tareas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarea = new tareas();
        $tarea->titulo = $request->titulo;
        $tarea->descripcion = $request->descripcion;
        $tarea->estado = $request->estado;
        $tarea->autor = $request->autor;
        if($request->likes == true){
            
            $tarea->likes = $tarea->likes +1;
        }
        $tarea -> save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function show(tareas $tareas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function edit(tareas $tareas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $tarea = tareas::findOrFail($request->id);
        $tarea->titulo = $request->titulo;
        $tarea->descripcion = $request->descripcion;
        $tarea->estado = $request->estado;
        $tarea->autor = $request->autor;
        if($request->likes == true){
            
            $tarea->likes = $tarea->likes +1;
        }
        $tarea -> save();
        return $tarea;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) //tareas $tareas

    {   

        $tarea = tareas::findOrFail($request->id);

        if($tarea->likes == 0){
            $tareaD = tareas::destroy($request->id);
            return response()->json($tareaD);
        }else{

            return response()->json('no se puede eliminar ya que tiene likes');
        }
        
        
    }
}
