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
                        <form action="{{ url('/assignments') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('assignments.form', ['modo' => 'Crear'])
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
            width: 50px;
            /* Puedes ajustar el tamaño según tus necesidades */
            height: 50px;
        }

        .available-item {
            cursor: pointer;
        }

        .assigned-item {
            position: relative;
            font-size: 1em;
        }

        .remove-item {
            position: absolute;
            top: 5px;
            right: 5px;
            width: 1.5em;
            height: 1.5em;
            padding: 0;
            font-size: 0.8em;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 3px;
        }
    </style>
@stop
@section('js')
    <script src="{{ asset('vendor/adminlte/dist/js/select2.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>

    <script>
        $(document).ready(function() {
            // Inicializa Select2 en el selector de personas
            $('.person').select2();

            // Actualiza el campo oculto con el ID de la persona seleccionada
            $('#people_id').on('change', function() {
                $('#selectedPerson').val($(this).val());
            });

            // Al hacer clic en un ítem disponible, muévelo a "Items Asignados"
            $('.available-item').on('click', function() {
                const itemId = $(this).data('id');
                const itemText = $(this).html();

                // Verificar si ya está en la lista asignada
                if ($('#assignedItems').find(`[data-id="${itemId}"]`).length === 0) {
                    $('#assignedItems').append(`
                        <li class="list-group-item assigned-item" data-id="${itemId}">
                        ${itemText}
                        <button type="button" class="btn btn-sm btn-danger remove-item">x</button></li>
                    `);
                    updateAssignedItems();
                }
            });

            // Configura SortableJS solo en "Items Asignados" para permitir el orden y eliminación
            Sortable.create(document.getElementById('assignedItems'), {
                animation: 150,
                onEnd: updateAssignedItems
            });

            // Función para actualizar el campo oculto con los IDs de los ítems asignados
            function updateAssignedItems() {
                const assignedIds = Array.from(document.getElementById('assignedItems').children).map(item => item
                    .dataset.id);
                $('#assignedItemIds').val(assignedIds.join(
                    ',')); // Guarda los IDs en un solo campo, separados por comas
            }

            // Permitir que los elementos de "Items Asignados" se eliminen al hacer clic
            $('#assignedItems').on('click', '.remove-item', function(e) {
                e.preventDefault();
                $(this).closest('li').remove(); // Eliminar el elemento <li>
                updateAssignedItems(); // Actualizar lista de IDs asignados
            });
        });
    </script>
@stop
