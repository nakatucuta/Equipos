@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    
@stop

@section('content')
<br> <br>
<div class="card border-info mb-3">
    <div class="card-header bg-success">DETALLE DEL ITEM DE:</div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$item->foto }}" alt="">
            </div>
            <div class="col-md-4">
                <h2>ITEM: {{ $item->tipo_item }}</h2> 
                
                <p><strong>ID:</strong> {{ $item->id }}</p>
                <p><strong>SERVICETAG:</strong>{{ $item->service_tag }}</p>
                <p><strong>FUNCIONARIO:</strong> {{ $item->nombres }}</p>
                <p><strong>CARGO: </strong>{{ $item->cargo }}</p>
                <p><strong>ITEM: </strong>{{ $item->tipo_item }}</p>
                
                <p><strong>MARCA:</strong> {{ $item->marca }}</p>
                {{--<p><strong>Precio:</strong> {{ $item->precio }}</p> --}}
                {{-- <p><strong>Foto:</strong> {{ $item->foto }} </p>   --}}
                {{-- <p><strong>Tipo de equipo:</strong> {{ $item->tipo_equipo }}</p>
                <p><strong>Memoria Ram:</strong> {{ $item->memoriaram }}</p>
                <p> <strong>Capacidad ram:  {{ $item->capacidad_ram }}</strong></p>
                <p><strong>Cantidad Ram:</strong> {{ $item->cantidad_ram }}</p>
                <p><strong>Capacidad disco duro:</strong> {{ $item->capacidad_discoduro }}</p>
                <p><strong>Tecnologia disco duro:</strong> {{ $item->tegnologia }}</p>
                <p><strong>Cantidad disco duro:</strong> {{ $item->cantidad_discoduro }}</p>
                 --}}
                
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{-- <p><strong>Sistema operativo: </strong>{{ $item->sistema_operativo }}</p>
                    <p><strong>Sistema operativo: </strong>{{ $item->sistema_operativo }}</p>
                    <p><strong>Nombre Aw: </strong>{{ $item->nombre_aw }}</p>
                    <p><strong>Ip: </strong>{{ $item->ip }}</p>
                    <p><strong>Mac: </strong>{{ $item->mac }}</p>
                    <p><strong>Fecha mantenimiento: </strong>{{ $item->fecha_mantenimiento }}</p>
                    <p><strong>Mac: </strong>{{ $item->mac }}</p>
                    <p><strong>Oficce: </strong>{{ $item->oficce }}</p>
                    <p><strong>Tipo: </strong>{{ $item->tipo }}</p>
                    <p><strong>Correo ofice: </strong>{{ $item->correo_ofice }}</p>
                    <p><strong>Antivirus: </strong>{{ $item->antivirus }}</p>
                    <p><strong>Acceso remoto: </strong>{{ $item->acceso_remoto }}</p>
                    <p><strong>Copia de seguridad: </strong>{{ $item->copia_seguridad }}</p>
                    <p><strong>Nombre de carpeta: </strong>{{ $item->nombre_carpeta }}</p>
                    <p><strong>Correo copia de seguridad: </strong>{{ $item->correo_copiaseg }}</p>
                    <p><strong>Board: </strong>{{ $item->board }}</p> --}}
                </div>
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
</style>
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/select2.css') }}">
@stop

@section('js')
<script src="{{ asset('vendor/adminlte/dist/js/select2.min.js') }}"></script>
@stop
