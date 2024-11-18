@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>ASIGNACIONES

    </h1>

    @include('assignments.mensajes')

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@stop

@section('content')

    <a href="{{ route('assignments.create') }}" title="DETALLE" class="btn  btn-primary btn-sm">
        <span class="icon-zoom-in"></span> NUEVO ASIGNACION</a>
    <a href="{{ route('asigna1') }}" class="btn  btn-success btn-sm"
        style="
    float: right:;
    margin-right: 0;
    
    position: relative;
    right: 0;"><i
            class="fas fa-book"></i> </a>
    <br><br>
    <table class="table table-hover table-striped table-bordered  {{-- table-responsive --}}" style="border: 1px solid #000000;"
        id="sivigila">
        <thead class="table table-hover table-info table-bordered "
            style="background-color: #d9f2e6 ;border: 1px solid #000000;">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cargo</th>
                <th scope="col">Tipo Item</th>
                <th scope="col">Service Tag</th>
                <th scope="col">Marca</th>
                {{-- <th scope="col">Imagen</th> --}}
                <th scope="col">Acciones</th>

            </tr>
        </thead>
        <tbody id="table">

            @foreach ($item as $items)
                <tr>
                    <td>{{ $items->id }}</td>
                    <td><a href="{{ route('general', $items->people_id) }}"> {{ $items->nombres }}</a></td>
                    <td>{{ $items->cargo }}</td>
                    <td>{{ $items->tipo_item }}</td>
                    <td>{{ $items->service_tag }}</td>
                    <td>{{ $items->marca }}</td>
                    {{-- <td>
                    <img class="img-thumbnail img fluid" src="{{ asset('storage').'/'.$items->foto }}" width="50"  alt=""> {{-- estamos accediendo a la carpeta donde esta la imagen 
                             
                           
                    </td> --}}
                    <td>
                        {{-- <form action="{{ url('/assignments/'.$items->id)}}" class="d-inline" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" onclick="return confirm('¿Quieres borrar?')" class="btn btn-danger  btn-sm"><i class="fas fa-trash"></i></button>
                        </form> --}}

                        <a class="btn btn-primary btn-sm" href="{{ route('detalleasignacion', $items->id) }}"
                            class="ref">
                            <i class="far fa-eye"></i>
                        </a>


                        <a href="{{ route('assignments.destroy', $items->id) }}"
                            onclick="event.preventDefault();
                            if(confirm('¿Está seguro de que desea eliminar la asignacion?')) {
                            document.getElementById('delete-form-{{ $items->id }}').submit();
                            }"
                            class="btn  btn-danger btn-sm">
                            <i class="fas fa-trash"></i>
                        </a>

                        <form id="delete-form-{{ $items->id }}" action="{{ route('assignments.destroy', $items->id) }}"
                            method="POST" style="display: none;">
                            @method('DELETE')
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
            background-color: #555;
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
            display: flex;
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
        $(document).ready(function() {
            $('#sivigila').DataTable({
                "language": {
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
