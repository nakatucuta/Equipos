@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Crear Item</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12">
       
        <form action="{{url('/item')}}" method="post" enctype="multipart/form-data">
                @csrf
    

                    @include('item.form', ['modo'=>'Crear'])
                
</div>
        

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/select2.css') }}">
   @stop

@section('js')
<script src="{{ asset('vendor/adminlte/dist/js/select2.min.js') }}"></script>

    <script> 
         $(document).ready(function() {
    $('.person2').select2();
        });
        
        $(document).ready(function() {
    $('.person').select2();
        });
        

        $(document).ready(function(){
             $('#copia_seguridad').on('change', function() {
                 if ( this.value == 'SI')
                 $("#input_oculto").show();
                 else
                 $("#input_oculto").hide();
             });
            
                });
        </script>
@stop