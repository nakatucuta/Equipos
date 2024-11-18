@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <!-- Puedes agregar contenido en el encabezado si lo necesitas -->
@stop

@section('content')
    <div class="row">
        <!-- Información del Usuario -->
        <div class="col-md-4 col-12 mb-3 info-user">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-address-card me-2"></i>Información del Funcionario
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>
                            <strong>Nombre:</strong> {{ $people->nombres }}
                        </li>
                        <li>
                            <strong>Cargo:</strong> {{ $people->cargo }}
                        </li>
                        <li>
                            <strong>Dirección:</strong> {{ $people->direccion }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Información del Equipo (Equipos Asignados) -->
        <div class="col-md-8 col-12 info-equipo">
            <div class="card">
                <div class="card-body">
                    @foreach ($items as $item)
                        <div class="list-group-item">
                            <div class="card mb-3">
                                <div class="card-header bg-info text-white d-flex align-items-center">
                                    <!-- Contenedor con ícono y texto -->
                                    <div class="d-flex align-items-center flex-grow-1">
                                        @if ($item->tipo_item == 'CPU')
                                            <i class="fas fa-hdd me-2"></i>
                                        @elseif($item->tipo_item == 'PORTATIL')
                                            <i class="fas fa-laptop me-2"></i>
                                        @elseif($item->tipo_item == 'IMPRESORA')
                                            <i class="fas fa-print me-2"></i>
                                        @elseif($item->tipo_item == 'MOUSE')
                                            <i class="fas fa-computer-mouse me-2"></i>
                                        @elseif($item->tipo_item == 'PANTALLA')
                                            <i class="fas fa-tv me-2"></i>
                                        @elseif($item->tipo_item == 'TELEFONO')
                                            <i class="fas fa-phone me-2"></i>
                                        @elseif($item->tipo_item == 'BATERIA')
                                            <i class="fas fa-car-battery me-2"></i>
                                        @elseif($item->tipo_item == 'TECLADO')
                                            <i class="fas fa-keyboard me-2"></i>
                                        @elseif($item->tipo_item == 'CELULAR')
                                            <i class="fas fa-mobile-alt me-2"></i>
                                        @elseif($item->tipo_item == 'TABLET')
                                            <i class="fas fa-tablet-alt me-2"></i>
                                        @elseif($item->tipo_item == 'DIADEMA')
                                            <i class="fas fa-headphones me-2"></i>
                                        @else
                                            <i class="fas fa-tag me-2"></i>
                                        @endif
                                   
                                        {{ $item->tipo_item }}:<strong class="modelo">{{ $item->modelo }}</strong>
                                    </div>
                                        <a href="{{ route('item.edit', $item->id) }}"
                                            class="btn btn-warning btn-sm" ><i class="fas fa-edit fa-fw"></i></a>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        @if ($item->tipo_item == 'CPU' || $item->tipo_item == 'PORTATIL')
                                            <div class="col-md-6">
                                                <label><strong>Activo:</strong></label>
                                                <p>{{ $item->activo }}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label><strong>Service-tag:</strong></label>
                                                <p>{{ $item->service_tag }}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label><strong>IP:</strong></label>
                                                <p>{{ $item->ip }}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label><strong>MAC:</strong></label>
                                                <p>{{ $item->mac }}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label><strong>AW:</strong></label>
                                                <p>{{ $item->nombre_aw }}</p>
                                            </div>
                                        @else
                                            <div class="col-md-6">
                                                <label><strong>Activo:</strong></label>
                                                <p>{{ $item->activo }}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label><strong>Service-tag:</strong></label>
                                                <p>{{ $item->service_tag }}</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .modelo {
            color: #202020;
        }

        ul.list-unstyled li {
            margin-bottom: 5px;
        }

        .card-header i {
            font-size: 1.2rem;
            color: #202020;
            padding-right: 10px;
        }
    </style>
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/select2.css') }}">
@stop

@section('js')
    <script src="{{ asset('vendor/adminlte/dist/js/select2.min.js') }}"></script>
@stop
