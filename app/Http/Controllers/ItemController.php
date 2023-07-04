<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Exports\ItemExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener los datos de la base de datos
        $productos = DB::table('items')
                        ->select('nombre', DB::raw('SUM(cantidad) as total'))
                        ->groupBy('nombre')
                        ->get();
    
        // Preparar los datos para la gráfica de barras
        $categorias = [];
        $totales = [];
    
        foreach ($productos as $producto) {
            $categorias[] = $producto->nombre;
            $totales[] = $producto->total;
        }

        
        $item = Item::select('*')->get();
        return view('item.index',compact('categorias', 'totales','item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $persona = person::select('*')->get();
        return view('item.create',["persona"=>$persona]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosEmpleado = request()->except('_token');
        if($request->hasfile('foto')){  
            $datosEmpleado ['foto'] = $request->file('foto')->store('uploads','public');
        }
    
        // Establecer manualmente los valores de created_at y updated_at
        $now = now();
        $datosEmpleado['created_at'] = $now;
        $datosEmpleado['updated_at'] = $now;
    
        Item::insert($datosEmpleado);
        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $empleado = Item::findOrFail($id);
        if(Storage::delete('public/'.$empleado->foto)){
            Item::destroy($id);
        }
        //AQUI TERMINA PARA BORRAR LA FOTO

        Item::destroy($id);

        return redirect()->route('item.index');

    
    }


    public function resporte()
    {   
        return Excel::download(new ItemExport, 'Item.xls');


    }

    public function detail($id)
    {   
        $item = Item::findOrFail($id);

        $person_name = DB::table('people')
        ->select(DB::raw("people.nombres"))
       
        ->join('items', 'people.id', '=', 'items.people_id')
        ->where('items.id', $id)
        ->first();
 

        return view('item.detail',["item"=>$item,"person_name"=>$person_name]);


    }




    public function graficaBarras()
    {
        // Obtener los datos de la base de datos
        $productos = DB::table('items')
                        ->select('nombre', DB::raw('SUM(cantidad) as total'))
                        ->groupBy('nombre')
                        ->get();
    
        // Preparar los datos para la gráfica de barras
        $categorias = [];
        $totales = [];
    
        foreach ($productos as $producto) {
            $categorias[] = $producto->nombre;
            $totales[] = $producto->total;
        }
    
        // Pasar los datos a la vista
        return view('item.grafica-barras', compact('categorias', 'totales'));

    }
    

    

}
