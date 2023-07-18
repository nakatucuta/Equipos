<?php

namespace App\Http\Controllers;

use App\Models\Peripherals;
use Illuminate\Http\Request;

class PeripheralsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periferico = Peripherals::select('*')->get();
        return view('peripherals.index',["periferico"=>$periferico]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peripherals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosEmpleado = request()->except('_token');
        // Establecer manualmente los valores de created_at y updated_at
       
        $now = now();
        $datosEmpleado['created_at'] = $now->format('Y-d-m h:m:s');
        $datosEmpleado['updated_at'] = $now->format('Y-d-m h:m:s');

        Peripherals::insert($datosEmpleado);
        return redirect()->route('perifericos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peripherals $peripherals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peripherals $peripherals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peripherals $peripherals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peripherals $peripherals)
    {
        //
    }
}
