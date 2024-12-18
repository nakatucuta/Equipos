<?php

namespace App\Http\Controllers;

use App\Models\person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $person = person::leftjoin('assignments as b', 'people.id', '=', 'b.people_id')
            ->select('people.id','people.nombres','people.direccion','people.correo', 'people.cedula', 'people.cargo', DB::raw('COUNT(b.id) as assignment_count'))
            ->groupBy('people.id', 'people.cedula','people.nombres','people.direccion','people.correo','people.cargo')
            ->get();
        return view('person.index',["person"=>$person]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $campos= [
            'nombres' => 'required',
            'cedula' => 'required',
            'cargo' => 'required',
            'correo' => 'required',
            'direccion' => 'required',
            
            
        ];

        $mensajes=[
            'required'=>'El :attribute es requerido',      
        ];

        $this->validate($request, $campos, $mensajes);
        $datosEmpleado = request()->except('_token');
        // Establecer manualmente los valores de created_at y updated_at
        $now = now();
       
        $datosEmpleado['created_at'] = $now->format('Y-d-m h:m:s');
        $datosEmpleado['updated_at'] = $now->format('Y-d-m h:m:s');

        person::insert($datosEmpleado);
        return redirect()->route('person.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(person $person)
    {
        //
    }
}
