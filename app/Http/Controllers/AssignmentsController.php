<?php

namespace App\Http\Controllers;

use App\Models\assignments;
use Illuminate\Http\Request;
use App\Models\person;
use App\Models\Item;


class AssignmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = assignments::select('*')->get();
        return view('assignments.index',compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $persona = person::select('*')->get();
        $item = Item::select('*')->get();
        return view('assignments.create',compact('persona','item'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosEmpleado = request()->except('_token');
        $now = now();
        $datosEmpleado['created_at'] = $now->format('Y-d-m h:m:s');
        $datosEmpleado['updated_at'] = $now->format('Y-d-m h:m:s');


        
    // Obtener los IDs de los periféricos como un array
    $ITEM_IDS = $request->input('item_id');

    // Insertar una nueva fila para cada ID de periférico en la base de datos
    foreach ($ITEM_IDS as $item_id) {
        // Clonar los datos del empleado para cada periférico seleccionado
        $datosEmpleadoPeriferico = $datosEmpleado;

        // Establecer el ID del periférico actual
        $datosEmpleadoPeriferico['item_id'] = $item_id;


        assignments::insert($datosEmpleadoPeriferico);

    }
 


        return redirect()->route('assignments.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(assignments $assignments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(assignments $assignments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, assignments $assignments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(assignments $assignments)
    {
        //
    }
}
