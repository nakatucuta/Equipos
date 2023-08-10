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
   @stop
@section('js')
<script src="{{ asset('vendor/adminlte/dist/js/select2.min.js') }}"></script>

<script>
     $(document).ready(function() {
    $('.person').select2();
        });

        $(document).ready(function() {
    $('.persona').select2();
        });
</script>

<script>

    // Inicializa Select2 en el elemento <select>
        $(document).ready(function() {
        $('#item_id').select2({
            templateResult: formatOption // Llama a la función formatOption para personalizar el contenido de cada opción
        });
    });

    // Función para personalizar el contenido de cada opción
    function formatOption(option) {
        if (!option.id) {
            return option.text; // Si es la opción "SELECCIONAR", muestra el texto normalmente
        }

        // Para cada desarrollador, crea una opción con la marca y la imagen en miniatura
        var $option = $(
            '<span><img class="img-thumbnail img-fluid img-posicionada img-pequena" src="' + option.element.dataset.img + '" alt="" />' + option.text + '</span>'
        );
        return $option;
    }
</script>


@stop