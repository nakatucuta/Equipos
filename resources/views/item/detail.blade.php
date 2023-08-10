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
                <div class="col-sm-12">
                    <div class="form-group">
                        
                        <img class="img-thumbnail img-fluid img-posicionada" src="{{ asset('storage').'/'.$item->foto }}" alt="">
                       
                        <h4>Responsable: {{ $person_name->est_actual }}</h4>
                        <p> <strong> Descrpcion:</strong> {{ $item->descripcion }}</p>  
                        <p><strong>Activo:</strong> {{ $item->activo }}</p>
                        <p><strong>Marca: </strong>{{ $item->marca }}</p>
                        <p><strong>Service:</strong {{ $item->service }}></p>
                        <p><strong>Tag:</strong> {{ $item->tag }}</p>
                        {{-- <p><strong>Foto:</strong> {{ $item->foto }} </p>   --}}
                        <p><strong>Cantidad:</strong> {{ $item->cantidad }}</p>
                        <p><strong>Fecha de última mantenimiento:</strong> {{ $item->ult_fecha_mant }}</p>
                        <p> <strong>  Copia de seguridad ?:  {{ $item->copia_seguridad }}</strong></p>
                        <p><strong>Fecha copia de seguridad:</strong> {{ $item->fech_cop_seg }}</p>
                        <p><strong>Detalles de copia:</strong> {{ $item->descripcion_copseguridad }}</p>
                        
                        
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
    width: 450px;
}

  </style>
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/select2.css') }}">
   @stop

@section('js')
<script src="{{ asset('vendor/adminlte/dist/js/select2.min.js') }}"></script>

    
@stop