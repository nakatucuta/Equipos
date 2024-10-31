@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <h1>ASIGNACIONES</h1>
                <div class="card card-info card-outline card-tabs">
                    <div class="card-header">
                        <h2 class="card-title text-center">
                            <i class="fas fa-user-circle" style="font-size: 45px; color: #3333ff;"></i>   
                        </h2>  
                    </div>
                    <div class="card-body">
                        <form action="{{url('/assignments')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('assignments.form', ['modo'=>'Crear'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('content')

@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/select2.css') }}">
    <style>
          /* Agrega el estilo CSS para la clase img-pequena */
  .img-pequena {
            width: 50px; /* Puedes ajustar el tamaño según tus necesidades */
            height: 50px;
        }
    </style>
   @stop
@section('js')
<script src="{{ asset('vendor/adminlte/dist/js/select2.min.js') }}"></script>
<script>
    $(document).ready(function() {
        // Inicializa Select2 en ambos selects sin imágenes
        $('.person').select2();
        $('.persona').select2(); // Sin formato personalizado
    });
</script>


@stop