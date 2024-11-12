<?php

namespace App\Http\Controllers;

use App\Models\assignments;
use Illuminate\Http\Request;
use App\Models\person;
use App\Models\Item;
use App\Exports\AsignarExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AssignmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = DB::table('assignments as a')
        ->join('people as b', 'a.people_id', '=', 'b.id')
        ->join('items as c', 'a.item_id', '=', 'c.id')
        ->select('a.id', 'b.nombres', 'b.cargo', 'c.tipo_item', 'c.service_tag','c.foto'
        ,'c.marca')
        ->get();
        return view('assignments.index',compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $persona = person::select('*')->get();
        $item = DB::table('items')
        ->leftJoin('users', 'items.user_id', '=', 'users.id')
        ->whereNotExists(function ($query) {
            $query->select(DB::raw(1))
                ->from('assignments')
                ->whereRaw('assignments.item_id = items.id');
        })
        ->select('items.*', 'users.name as user_name')
        ->get();
        return view('assignments.create',compact('persona','item'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $campos = [
        'people_id' => 'required|exists:people,id',
        'item_id' => 'required|string',
    ];

    $mensajes = [
        'required' => 'El :attribute es requerido',
    ];

    $this->validate($request, $campos, $mensajes);

    // Obtén los datos sin incluir `created_at` y `updated_at`
    $datosEmpleado = $request->except('_token', 'item_id');

    // Asigna fechas como instancias de Carbon sin formatear
    $datosEmpleado['created_at'] = now();
    $datosEmpleado['updated_at'] = now();

    // Convertimos los IDs de item_id a un array
    $ITEM_IDS = explode(',', $request->input('item_id'));

    // Insertar una nueva fila para cada ID de ítem en la base de datos
    foreach ($ITEM_IDS as $item_id) {
        $datosEmpleadoPeriferico = $datosEmpleado;
        $datosEmpleadoPeriferico['item_id'] = $item_id;

        assignments::create($datosEmpleadoPeriferico);
    }

    return redirect()->route('item.create')
        ->with('mensaje', 'La asignación fue guardada exitosamente.');
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
    public function destroy(assignments $assignment)
    {
        $assignment->delete();
        // Session::flash('error','El registro se ha agregado correctamente');
        return redirect('assignments')->with('error', 'Empleado borrado con exito');
    }

    public function reporteasignacion()
    {   
        return Excel::download(new AsignarExport, 'asignaciones.xls');


    }


    public function detail($id)
    {   
        $assignment = assignments::findOrFail($id); // Usar el modelo Assignment en lugar de DB::table
    
        $item = assignments::join('people as b', 'assignments.people_id', '=', 'b.id')
            ->join('items as c', 'assignments.item_id', '=', 'c.id')
            ->select('assignments.id', 'b.nombres', 'b.cargo', 'c.tipo_item', 'c.service_tag', 'c.foto', 'c.marca',
            'c.tipo_item')
            ->where('assignments.id', $id)
            ->first();
    
        return view('assignments.detail', ["item" => $item,"assignment" => $assignment]);
    }
    
}
