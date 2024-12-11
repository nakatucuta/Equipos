@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Crear Item</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">

            <form action="{{ url('/item/' . $empleado->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}

                @include('item.form', ['modo' => 'Editar'])

        </div>


        </form>
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/select2.css') }}">
    @stop
    <style>
        .select2-results__option {
            font-size: 14px;
            color: #333;
        }

        // Ajustar el estilo del contenedor del campo de selección
        .select2-container {
            width: 100%;
        }

        // Ajustar el estilo de la etiqueta "SELECCIONAR" que muestra el placeholder
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #007bff;
            color: #fff;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            color: #e20d0d !important;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #fff !important;
            /* Cambiar el color de fondo del elemento seleccionado */
            color: #ec0b0b !important;
            /* Cambiar el color del texto del elemento seleccionado */
        }

        /* Cambiar el color del texto del icono "x" (para eliminar elementos seleccionados) */
        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            color: #fff;
            /* Cambiar el color del texto del icono "x" */
        }
    </style>
    @section('js')
        <script src="{{ asset('vendor/adminlte/dist/js/select2.min.js') }}"></script>

        <script>
            $(document).ready(function() {
                // Inicialización de Select2
                $('.person2').select2();
                $('.person').select2();

                // Evento para mostrar u ocultar elementos basado en el valor del select
                $('#tipo_item').on('change', function() {
                    let value = $(this).val();

                    if (value == 'CELULAR' || value == 'TELEFONO') {
                        $('#inputsuperoculto').hide();
                        $('#inputsuperoculto1').hide();
                        $('#inputsuperoculto2').hide();
                        $('#inputsuperoculto3').hide();
                        $('#inputsuperoculto5').hide();
                        $('#inputsuperoculto6').show();                      
                    } else if (value == 'TABLET') {
                        $('#inputsuperoculto').hide();
                        $('#inputsuperoculto1').hide();
                        $('#inputsuperoculto2').hide();
                        $('#inputsuperoculto3').hide();
                        $('#inputsuperoculto5').hide();
                        $('#inputsuperoculto6').hide();  
                    } else if (value == 'CPU' || value == 'PORTATIL') {
                        $('#inputsuperoculto').show();
                        $('#inputsuperoculto1').show();
                        $('#inputsuperoculto2').show();
                        $('#inputsuperoculto3').show();
                        $('#inputsuperoculto6').hide();  
                    } else {
                        $('#inputsuperoculto').hide();
                        $('#inputsuperoculto1').hide();
                        $('#inputsuperoculto2').hide();
                        $('#inputsuperoculto3').hide();
                        $('#inputsuperoculto5').hide();
                        $('#inputsuperoculto6').hide();  
                    }
                });

                // Disparar el evento 'change' manualmente al cargar la vista
                $('#tipo_item').trigger('change');
            });
        </script>


    @stop
