@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Funcionarios</h1>

@stop

@section('content')

    <a href="{{ route('person.create') }}" title="DETALLE" class="btn  btn-primary btn-sm">
        <span class="icon-zoom-in"></span> NUEVO</a>
    {{-- <a href=" {{route('export')}}" class="btn  btn-success btn-sm" style=" 
    float: right:;
    margin-right: 0;
    
    position: relative;
    right: 0;"><i class="fas fa-book"></i>  </a> --}}
    <br><br>
    <table class="table table-hover table-striped table-bordered  {{-- table-responsive --}}" style="border: 1px solid #000000;"
        id="persona">
        <thead class="table table-hover table-info table-bordered "
            style="background-color: #d9f2e6 ;border: 1px solid #000000;">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre Completo</th>
                <th scope="col"> Cedula</th>
                <th scope="col">Cargo</th>
                <th scope="col">Direccion</th>
                <th scope="col">Equipos</th>
            </tr>
        </thead>
        <tbody id="table">

            @foreach ($person as $items)
                <tr>
                    <td>{{ $items->id }}</td>
                    <td>{{ strtoupper($items->nombres) }}</td>
                    <td>{{ $items->cedula }}</td>
                    <td>{{ strtoupper($items->cargo) }}</td>
                    <td>{{ strtoupper($items->direccion) }}</td>
                    <td>
                        @if ($items->assignment_count > 0)
                            <a class="btn  btn-info btn-sm" href="{{ url('/asignacion/' . $items->id . '/general') }}"
                                class="ref">
                                <i class="fas fa-desktop fa-fw"></i>
                            </a>
                        @endif
                    </td>
                </tr>
            @endforeach
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('vendor/DataTables/css/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/DataTables/css/jquery.dataTables.css') }}">

@stop

@section('js')
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/DataTables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/DataTables/js/dataTables.bootstrap5.min.js') }}"></script>

    <style>
        .dataTables_filter input {
            width: 350px !important;
            height: 100%;
            background-color: ;
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
    <script>
        $(document).ready(function() {
            $('#persona').DataTable({
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
