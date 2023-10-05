@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>ITEMS

      
    </h1>



    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@stop

@section('content')

    <a href="{{route('item.create')}}" title="DETALLE" class="btn  btn-primary btn-sm">
    <span class="icon-zoom-in" ></span> NUEVO ITEM</a>
    <a href="{{route('export')}}" class="btn  btn-success btn-sm" style="
    float: right:;
    margin-right: 0;
    
    position: relative;
    right: 0;"><i class="fas fa-book"></i>  </a>
       <br><br>
<table class="table table-hover table-striped table-bordered  {{-- table-responsive--}}" style="border: 1px solid #000000;" id="sivigila">
     <thead class="table table-hover table-info table-bordered " style="background-color: #d9f2e6 ;border: 1px solid #000000;">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Service tag</th>
            <th scope="col">Modelo</th>
            <th scope="col">Marca</th>
            <th scope="col">Precio</th>
            <th scope="col">Imagen</th>
            <th scope="col">Acciones</th>

           
        </tr>
    </thead>
            <tbody id="table">
                    
                @foreach($item as $items)
                 <tr>
                    <td>{{$items->id}}</td>
                    <td>{{$items->tipo_item}}</td>
                    <td>{{$items->service_tag}}</td>
                    <td>{{$items->modelo}}</td>
                    <td>{{$items->marca}}</td>
                    <td>{{$items->precio}}</td>
                     <td>
                    <img class="img-thumbnail img fluid" src="{{ asset('storage').'/'.$items->foto }}" width="50"  alt=""> {{--estamos accediendo a la carpeta donde esta la imagen --}}
                               {{-- {{$empleado->foto}} --}}
                           
                    </td> 
                    <td>
                        <form action="{{ url('/item/'.$items->id)}}" class="d-inline" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" onclick="return confirm('¿Quieres borrar?')" class="btn btn-danger  btn-sm"><i class="fas fa-trash"></i></button>
                        </form>

                         <a class="btn btn-primary btn-sm" href="{{route('detalleseguimiento', $items->id)}}" class="ref">
                                <i class="far fa-eye fa-spin  fa-fw"></i>
                        </a>

                        <a class="btn  btn-warning" href="{{url('/item/'.$items->id. '/edit')}}" class="ref" >
                            <i class="fa fa-cog fa-spin  fa-fw"></i>
                        </a>

                        @if ($items->estado === '0')
                        <button class="btn btn-secondary btn-sm" style="cursor: not-allowed;">
                            <i class="fas fa-toggle-on" style="color: gray;"></i>
                        </button>
                    @else
                        <a href="{{ route('baja1', $items->id) }}"
                           onclick="event.preventDefault();
                                    if (confirm('¿Está seguro de que desea dar de baja a este item?')) {
                                        document.getElementById('delete-form-{{ $items->id }}').submit();
                                    }"
                           class="btn btn-danger btn-sm">
                            <i class="fas fa-toggle-on"></i>
                        </a>
                    @endif
                    <form id="delete-form-{{ $items->id }}" action="{{ route('baja1', $items->id) }}" method="GET" style="display: none;">
                        @csrf
                    </form>              
                         
                         
                         
                        
                    
                        </td>
                        @endforeach
                    </tr>   
</table>


 

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('vendor/DataTables/css/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/DataTables/css/jquery.dataTables.css') }}"> 
    <style> 

        .dataTables_filter input {
          width: 350px !important;
          height: 100%;
          background-color: #555 ;
          border: solid 3px !important;
          border-radius: 20px !important;
          color: rgb(64, 125, 232);
          padding: 10px !important;
          font-weight: bold !important;
        }
        
        .dataTables_filter label {
          font-weight: bold !important;
        }
        
         .dataTables_length label {
          
          font-weight: bold !important;
        } 
        
        .dataTables_length select {
          display: flex ;
          border: solid 3px !important;
          border-radius: 20px !important;
          align-items: center !important;
          margin-bottom: 10px !important;
          color: rgb(64, 125, 232) !important;
        }
        
        </style>
@stop

@section('js')
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/DataTables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/DataTables/js/dataTables.bootstrap5.min.js') }}"></script>


    <script>
        $(document).ready(function () {
        $('#sivigila').DataTable({
            "language":{
                "search": "BUSCAR",
                "lengthMenu": "Mostrar _MENU_ registros",
                "info": "Mostrando pagina _PAGE_ de _PAGES_",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "autoWidth": true
        });
    });
    </script>
@stop