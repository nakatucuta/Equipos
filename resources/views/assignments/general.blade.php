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
                        <li>
                            <strong>Correo:</strong> <em>{{ $people->correo }}</em>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Información del Equipo (Equipos Asignados) -->
        <div class="col-md-8 col-12 info-equipo">
            <div class="card">
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
                                <a href="{{ route('item.edit', $item->id) }}" class="btn btn-primary btn-sm"><i
                                        class="fas fa-edit fa-fw"></i></a>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @if ($item->tipo_item == 'CPU' || $item->tipo_item == 'PORTATIL')
                                        <div class="col-md-6">
                                            <div class="list-group-item">
                                                <label><strong>Activo:</strong></label>
                                                <span>{{ $item->activo }}</span>
                                            </div>
                                            <div class="list-group-item">
                                                <label><strong>Marca:</strong></label>
                                                <span>{{ $item->marca }}</span>
                                            </div>
                                            <div class="list-group-item">
                                                <label><strong>Service-tag:</strong></label>
                                                <span>{{ $item->service_tag }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="list-group-item">
                                                <label><strong>IP:</strong></label>
                                                <span>{{ $item->ip }}</span>
                                            </div>
                                            <div class="list-group-item">
                                                <label><strong>MAC:</strong></label>
                                                <span>{{ $item->mac }}</span>
                                            </div>
                                            <div class="list-group-item">
                                                <label><strong>AW:</strong></label>
                                                <span>{{ $item->nombre_aw }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="list-group-item">
                                                <label><strong>Sistema operativo:</strong></label>
                                                <span>{{ $item->sistema_operativo }}</span>
                                            </div>
                                            <div class="list-group-item">
                                                <label><strong>Procesador:</strong></label>
                                                <span>{{ $item->procesador }}</span>
                                            </div>
                                            <div class="list-group-item">
                                                <label><strong>RAM:</strong></label>
                                                <span>{{ $item->capacidad_ram }}</span>
                                            </div>
                                            <div class="list-group-item">
                                                <label><strong>Disco duro:</strong></label>
                                                <span>{{ $item->capacidad_discoduro }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="list-group-item">
                                                <label><strong>Carpeta copia:</strong></label>
                                                <span>{{ $item->nombre_carpeta }}</span>
                                                <span><em>{{ strtolower($item->correo_copiaseg) }}</em></span>
                                            </div>
                                            <div class="list-group-item">
                                                <label><strong>Office:</strong></label>
                                                <span>{{ $item->tipo }} : {{ $item->oficce }}</span>
                                                <span><em>{{ strtolower($item->correo_ofice) }}</em></span>
                                            </div>
                                            <div class="list-group-item">
                                                <label><strong>Fecha compra:</strong></label>
                                                <span>{{ $item->fecha_compra }}</span>
                                            </div>
                                            <div class="list-group-item">
                                                <label><strong>Ultimo mantenimiento:</strong></label>
                                                <span>{{ $item->fecha_mantenimiento }}</span>
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-md-4">
                                            <div class="list-group-item">
                                                <label><strong>Activo:</strong></label>
                                                <span>{{ $item->activo }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="list-group-item">
                                                <label><strong>Marca:</strong></label>
                                                <span>{{ $item->marca }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="list-group-item">
                                                <label><strong>Service-tag:</strong></label>
                                                <span>{{ $item->service_tag }}</span>
                                            </div>
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

        .list-group-item {
            padding: 0.1rem 1rem;
        }
    </style>
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/select2.css') }}">
@stop

@section('js')
    <script src="{{ asset('vendor/adminlte/dist/js/select2.min.js') }}"></script>
@stop
