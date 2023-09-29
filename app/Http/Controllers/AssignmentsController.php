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
        $item = Item::select('*')->get();
        return view('assignments.create',compact('persona','item'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $campos= [
            'people_id' => 'required',
            'item_id' => 'required',
            
        
        ];

        $mensajes=[
            'required'=>'El :attribute es requerido',      
        ];

        $this->validate($request, $campos, $mensajes);


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
 


        return redirect()->route('assignments.index') 
        ->with('mensaje',' La asignacion fue guardado Exitosamente..!');
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

    public function reporteasignacion()
    {   
        return Excel::download(new AsignarExport, 'asignaciones.xls');


    }


    public function detail($id)
    {   
        $assignment = assignments::findOrFail($id); // Usar el modelo Assignment en lugar de DB::table
    
        $item = assignments::join('people as b', 'assignments.people_id', '=', 'b.id')
            ->join('items as c', 'assignments.item_id', '=', 'c.id')
            ->select('assignments.id', 'b.nombres', 'b.cargo', 'c.tipo_item', 'c.service_tag', 'c.foto', 'c.marca')
            ->where('assignments.id', $id)
            ->first();
    
        return view('assignments.detail', ["item" => $item, "itemq" => $assignment]);
    }
    
}
