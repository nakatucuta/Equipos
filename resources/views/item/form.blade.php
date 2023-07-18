
<div class="row">
<div class="col-lg-6">

 <div class="card card-info card-outline card-tabs">
            <div class="card-header">
                <h2 class="card-title text-center">
                      <i class="fas fa-box-open" style="font-size: 45px; color: #3333ff; "></i>
                  
                      
                </h2>

                
            </div>
            
            <div class="card-body">
                <br>
                <div class="card border-info mb-3" >
                    <div class="card-header bg-success">EQUIPO</div>
                    <div class="card-body">
 <div class="form-group">
    <label for="activo">Nombre</label>    
    <input class="form-control" type="text" name="nombre" id='nombre' 
    value="{{ isset($empleado->nombre)?$empleado->nombre:old('nombre')}}">
</div>
<div class="form-group">
    <label for="activo">Cantidad</label>    
    <input class="form-control" type="number" name="cantidad" id='cantidad' 
    value="{{ isset($empleado->cantidad)?$empleado->cantidad:old('cantidad')}}">
</div>

<div class="form-group">
    <label for="activo">Activo</label>    
    <input class="form-control" type="text" name="activo" id='activo' 
    value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('activo')}}">
</div>

<div class="form-group">
    <label for="activo">Marca</label>    
    <input class="form-control" type="text" name="marca" id='marca' 
    value="{{ isset($empleado->marca)?$empleado->marca:old('marca')}}">
</div>

<div class="form-group">
    <label for="activo">Service</label>    
    <input class="form-control" type="text" name="service" id='service' 
    value="{{ isset($empleado->service)?$empleado->service:old('service')}}">
</div>

<div class="form-group">
    <label for="activo">Tag</label>    
    <input class="form-control" type="text" name="tag" id='tag' 
    value="{{ isset($empleado->tag)?$empleado->tag:old('tag')}}">
</div>
</div></div>
{{-- aqui termina la primera seccion --}}
<div class="form-group">
    <label for="activo">Descripcion</label>
    <textarea name="descripcion" id="descripcion" value="{{ isset($empleado->descripcion)?$empleado->descripcion:old('descripcion')}}" 
        class="form-control" rows="5" maxlength="600"></textarea>
    

</div>

<div class="form-group">
    <label for="activo">Ultima fecha de mantemiento</label>    
    <input class="form-control" type="date" name="ult_fecha_mant" id='ult_fecha_mant' 
    value="{{ isset($empleado->ult_fecha_mant)?$empleado->ult_fecha_mant:old('ult_fecha_mant')}}">
</div>




<div class="form-group" >
    <label for="Nombre">¿ copia de seguridad ?</label>
    <select class="person2 " name="copia_seguridad" id="copia_seguridad"  style="width: 100% ">
    <option  value="">SELECCIONAR</option>
    <option  value="SI">SI</option>
    <option  value="NO">NO</option>
    
  </select>
</div>

<div id='input_oculto'>
<div class="form-group"  >
    <label for="activo">Fecha copia de seguridad</label>    
    <input class="form-control" type="date" name="fech_cop_seg" 
    value="{{ isset($empleado->fech_cop_seg)?$empleado->fech_cop_seg:old('fech_cop_seg')}}">
</div>

<div class="form-group" >
    <label for="activo">Detalle</label>    
    <input class="form-control" type="text" name="descripcion_copseguridad"  
    value="{{ isset($empleado->fech_cop_seg)?$empleado->fech_cop_seg:old('fech_cop_seg')}}">
</div>
</div>
<div class="form-group" >
    <label for="Nombre">Funcionario</label>
    <select class="person " name="people_id" id="people_id"  style="width: 100% ">
    <option  value="0">SELECCIONAR</option>
    @foreach($persona as $developer)
    <option  value="{{$developer->id}}">{{$developer->nombres}}</option>
    @endforeach 
    
  </select>
</div>





<div class="form-group">
    <label for="Nombre">Foto</label>
    @if( isset($empleado->foto))
    <img src="{{ asset('storage').'/'.$empleado->foto }}" width="50" alt="">
    @endif
    {{-- {{$empleado->foto}} para mostrar ruta de foto --}}
    <input class="form-control" type="file" name="foto" value="" id="foto" >
    <br>
</div>
</div>
</div>
</div>

<div class="col-lg-6">
    <div class="card card-info card-outline card-tabs">
        <div class="card-header">
            <h2 class="card-title text-center">
                  <i class="fas fa-laptop" style="font-size: 45px; color: #3333ff; "></i>
                  
                  
            </h2>

            
        </div>
        
        <div class="card-body">
    <div class="form-group">
        <label for="activo">Ip</label>    
        <input class="form-control" type="text" name="ip" id='ip' 
        value="{{ isset($empleado->ip)?$empleado->ip:old('ip')}}">
    </div>

    <div class="form-group">
        <label for="activo">Ram</label>    
        <input class="form-control" type="text" name="ram" id='ram' 
        value="{{ isset($empleado->ram)?$empleado->ram:old('ram')}}">
    </div>

    <div class="form-group">
        <label for="activo">Cpu</label>    
        <input class="form-control" type="text" name="cpu" id='cpu' 
        value="{{ isset($empleado->cpu)?$empleado->service:old('cpu')}}">
    </div>
    <div class="form-group">
        <label for="activo">Disco duro</label>    
        <input class="form-control" type="text" name="disco_duro" id='disco_duro' 
        value="{{ isset($empleado->disco_duro)?$empleado->disco_duro:old('disco_duro')}}">
    </div>

    <div class="form-group">
        <label for="activo">Procesador</label>    
        <input class="form-control" type="text" name="procesador" id='procesador' 
        value="{{ isset($empleado->procesador)?$empleado->procesador:old('procesador')}}">
    </div>

    <div class="form-group">
        <label for="activo">Board</label>    
        <input class="form-control" type="text" name="board" id='board' 
        value="{{ isset($empleado->board)?$empleado->board:old('board')}}">
    </div>
    

    <div class="form-group" >
        <label for="Nombre">Pantalla</label>
        <select class="person " name="peripherals_id" id="peripherals_id"  style="width: 100% ">
        <option  value="0">SELECCIONAR</option>
        @foreach($periferico as $developer)
        <option  value="{{$developer->id}}">{{$developer->nombre_periferico}}</option>
        @endforeach 
        
      </select>
    </div>

    <div class="form-group" >
        <label for="Nombre">Mouse</label>
        <select class="person " name="mouse" id="mouse"  style="width: 100% ">
        <option  value="0">SELECCIONAR</option>
        @foreach($periferico as $developer)
        <option  value="{{$developer->id}}">{{$developer->nombre_periferico}}</option>
        @endforeach 
        
      </select>
    </div>
    
    

    <div class="form-group">
        <label for="activo">Teclado</label>    
        <input class="form-control" type="text" name="teclado" id='teclado' 
        value="{{ isset($empleado->teclado)?$empleado->teclado:old('teclado')}}">
    </div>
    
    <div class="form-group">
        <label for="activo">Estado actual fisico</label>    
        <textarea name="est_actual" id="est_actual" 
        value="{{ isset($empleado->est_actual)?$empleado->est_actual:old('est_actual')}}" 
            class="form-control" rows="5" maxlength="600"></textarea>
    </div>
    <div class="form-group">
        <label for="activo">Descripcion software instalados</label>    
        <textarea name="descripcion_soft" id="descripcion_soft" 
        value="{{ isset($empleado->descripcion_soft)?$empleado->descripcion_soft:old('descripcion_soft')}}" 
            class="form-control" rows="5" maxlength="600"></textarea>
    </div>
</div>
</div>
</div>

</div>
<input class="btn btn-success" type="submit" value="enviar">
<a  class="btn btn-primary" href="{{url('item')}}"  class="btn  btn-success"> REGRESAR</a>

