@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <h1>Crear</h1>
                <div class="card card-info card-outline card-tabs">
                    <div class="card-header">
                        <h2 class="card-title text-center">
                            <i class="fas fa-user-circle" style="font-size: 45px; color: #3333ff;"></i>   
                        </h2>  
                    </div>
                    <div class="card-body">
                        <form action="{{url('/person')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('person.form', ['modo'=>'Crear'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('content')

@stop

@section('js')
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/DataTables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/DataTables/js/dataTables.bootstrap5.min.js') }}"></script>

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