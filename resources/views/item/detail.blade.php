@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    
@stop

@section('content')
<br> <br>
    <div class="card border-info mb-3" >
        <div class="card-header bg-success">DETALLE DEL ITEM DE:</div>
        <div class="card-body">
            
            <p class="card-text">
            <br>
            <div class="row"> 
           
                <div class="col-sm-3">
                    <img class="img-thumbnail img fluid img-posicionada" src="{{ asset('storage').'/'.$item->foto }}" width="200"  alt="">
                </div>
                <div class="col-sm-3">
                    <h2>ITEM: {{ $person_name->tipo_item }}</h2>
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
                    <p><strong>Board: </strong>{{ $item->board }}</p>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        
                       
                        
                        <p> <strong> Nombre del equipo:</strong> {{ $item->est_actual }}</p>  
                        <p><strong>Fecha de compra:</strong> {{ $item->fecha_compra }}</p>
                        <p><strong>Marca: </strong>{{ $item->marca }}</p>
                        <p><strong>Modelo: </strong>{{ $item->modelo }}</p>
                        <p><strong>Service:</strong {{ $item->service_tag }}></p>
                        <p><strong>Procesador:</strong> {{ $item->procesador }}</p>
                        <p><strong>Precio:</strong> {{ $item->precio }}</p>
                        {{-- <p><strong>Foto:</strong> {{ $item->foto }} </p>   --}}
                        <p><strong>Tipo de equipo:</strong> {{ $item->tipo_equipo }}</p>
                        <p><strong>Memoria Ram:</strong> {{ $item->memoriaram }}</p>
                        <p> <strong>Capacidad ram:  {{ $item->capacidad_ram }}</strong></p>
                        <p><strong>Cantidad Ram:</strong> {{ $item->cantidad_ram }}</p>
                        <p><strong>Capacidad disco duro:</strong> {{ $item->capacidad_discoduro }}</p>
                        <p><strong>Tecnologia disco duro:</strong> {{ $item->tegnologia }}</p>
                        <p><strong>Cantidad disco duro:</strong> {{ $item->cantidad_discoduro }}</p>
                        
                                          </div>
                    </div>
                </div> 
             </div>
            </div>

@stop

@section('css')
<style>
.img-posicionada {
    position: absolute;
    top: 0;
    right: 0;
    width: 400px;
}

  </style>
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/select2.css') }}">
   @stop

@section('js')
<script src="{{ asset('vendor/adminlte/dist/js/select2.min.js') }}"></script>

    
@stop