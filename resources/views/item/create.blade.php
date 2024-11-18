@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Crear Item</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ url('/item') }}" method="post" enctype="multipart/form-data">
                @csrf

                @include('item.form', ['modo' => 'Crear'])

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

                $(document).ready(function() {
                    $('.persona22').select2();
                });

                $(document).ready(function() {
                    $('.person20').select2();
                });

                $(document).ready(function() {
                    $('.person6').select2();
                });

                $(document).ready(function() {
                    $('.person5').select2();
                });

                $('.person4').select2();
            });

            $(document).ready(function() {
                $('.person3').select2();
            });

            $(document).ready(function() {
                $('.person2').select2();
            });

            $(document).ready(function() {
                $('.person').select2();
            });


            $(document).ready(function() {
                $('#tipo_item').on('change', function() {
                    if (this.value == 'SI')
                        $("#inputsuperoculto").show();
                    else
                        $("#inputsuperoculto").hide();
                });
            });


            $(document).ready(function() {
                $('#copia_seguridad').on('change', function() {
                    if (this.value == 'SI')
                        $("#inputsuperoculto_copiseg").show();
                    else
                        $("#inputsuperoculto_copiseg").hide();
                });
            });

            $(document).ready(function() {
                $('#tipo_item').on('change', function() {
                    if ($(this).val() == 'CELULAR') {
                        $('#inputsuperoculto').hide();
                        $('#inputsuperoculto1').hide();
                        $('#inputsuperoculto2').hide();
                        $('#inputsuperoculto3').hide();
                        $('#inputsuperoculto5').hide();
                    }
                    if ($(this).val() == 'TABLET') {
                        $('#inputsuperoculto').hide();
                        $('#inputsuperoculto1').hide();
                        $('#inputsuperoculto2').hide();
                        $('#inputsuperoculto3').hide();
                        $('#inputsuperoculto5').hide();
                    }
                    if ($(this).val() == 'CPU') {
                        $('#inputsuperoculto').show();
                        $('#inputsuperoculto1').show();
                        $('#inputsuperoculto2').show();
                        $('#inputsuperoculto3').show();
                    } else {
                        $('#inputsuperoculto').hide();
                        $('#inputsuperoculto1').hide();
                        $('#inputsuperoculto2').hide();
                        $('#inputsuperoculto3').hide();
                        $('#inputsuperoculto5').hide();
                    }
                    if ($(this).val() == 'PORTATIL') {
                        $('#inputsuperoculto').show();
                        $('#inputsuperoculto1').show();
                        $('#inputsuperoculto2').show();
                        $('#inputsuperoculto3').show();
                    }
                });
            });
        </script>

    @stop
