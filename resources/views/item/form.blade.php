
@include('item.mensajes')
<div class="col-sm-4">
    <div class="form-group">
        <label for="Nombre">SELECCIONE QUE ITEM DESEA AGREGAR</label>
        <select class="person2" name="tipo_item" id="tipo_item" style="width: 100%" required>
            <option  value="">SELECCIONAR</option>
            <option value="PANTALLA">PANTALLA</option>
            <option value="CPU">CPU</option>
            <option value="CELULAR">CELULAR</option>
            <option value="TABLET">TABLET</option>
            <option value="IMPRESORA">IMPRESORA</option>    
            <option value="MOUSE">MOUSE</option>  
            <option value="TECLADO">TECLADO</option>
            <option value="BATERIA">BATERIA</option> 
            <option value="PORTATIL">PORTATIL</option>
            <option value="PARLANTE">PARLANTE</option>
            <option value="TELEFONO">TELEFONO</option>  
            <option value="SCANER">SCANER</option> 
            <option value="PISTOLA LASER">PISTOLA LASER</option>        
        </select>
    </div>
</div>







    
<div class="row" >
<div class="col-lg-4">


    {{-- <div  >
    debe desaparecerJHJJJJJJJJJJJJJJJJJJJJJJJJJ
   
   
    </div> --}}
 <div class="card card-info card-outline card-tabs">
            <div class="card-header">
                <h2 class="card-title text-center">
                      <i class="fas fa-box-open" style="font-size: 45px; color: #3333ff; "></i>
                  
                      
                </h2>

                
            </div>
            
            <div class="card-body">
              
                <div class="card border-info mb-3" >
                    <div class="card-header bg-success">EQUIPO</div>
                    <div class="card-body">
 {{-- <div class="form-group">
    <label for="activo">Nombre del equipo</label>    
    <input class="form-control" type="text" name="est_actual" id='est_actual' 
    value="{{ isset($empleado->est_actual)?$empleado->est_actual:old('est_actual')}}">
</div> --}}
<div class="form-group">
    <label for="activo">Fecha de compra</label>    
    <input class="form-control" type="date" name="fecha_compra" id='fecha_compra' 
    value="{{ isset($empleado->fecha_compra)?$empleado->fecha_compra:old('fecha_compra')}}">
</div>


<div class="form-group">
    <label for="Nombre">MARCA</label>
    <select class="person5" name="marca" id="marca" style="width: 100%" required>
        <option  value="">SELECCIONAR</option>
        <option value="Dell">Dell</option>
        <option value="Acer">Acer</option>
        <option value="Vaio">Grandstream</option> 
        <option value="Alienware">Alienware</option>
        <option value="Apple">Apple</option>
        <option value="Asus">Asus</option>    
        <option value="Gateway">Gateway</option>  
        <option value="HP">HP</option>
        <option value="LG">LG</option> 
        <option value="MSI">MSI</option>
        <option value="Omen by HP">Omen by HP</option>
        <option value="Samsung">Samsung</option>  
        <option value="Sony">Sony</option>
        <option value="Toshiba">Toshiba</option>
        <option value="Vaio">Vaio</option>
        <option value="CDP">CDP</option> 
        <option value="APC">APC</option>
        <option value="Genius">Genius</option> 
        <option value="fujitsu">fujitsu</option>
        <option value="Redmi">Redmi</option>  
        <option value="Kyocera">Kyocera</option>   
        <option value="Tsc">Tsc</option>
        <option value="Logitech">Logitech</option>
        <option value="Scanzen">Scanzen</option>
        <option value="Avision">Avision</option>
        <option value="Epson">Epson</option>
        <option value="Powest">Powest</option>
        <option value="Sat">Sat</option>                  
    </select>
</div>


{{-- <div class="form-group">
    <label for="activo">Marca</label>    
    <input class="form-control" type="text" name="marca" id='marca' 
    value="{{ isset($empleado->marca)?$empleado->marca:old('marca')}}">
</div> --}}

<div class="form-group">
    <label for="activo">Modelo</label>    
    <input class="form-control" type="text" name="modelo" id='modelo' 
    value="{{ isset($empleado->modelo)?$empleado->modelo:old('modelo')}}">
</div>

<div class="form-group">
    <label for="activo">Activo</label>    
    <input class="form-control" type="text" name="activo" id='activo' 
    value="{{ isset($empleado->activo)?$empleado->activo:old('activo')}}">
</div>

<div class="form-group">
    <label for="activo">Service Tag</label>    
    <input class="form-control" type="text" name="service_tag" id='service_tag' 
    value="{{ isset($empleado->service_tag)?$empleado->service_tag:old('service_tag')}}">
</div>

<div class="form-group" id="inputsuperoculto5">
    <label for="activo">Procesador</label>
    <textarea name="procesador" id="procesador" value="{{ isset($empleado->procesador)?$empleado->procesador:old('procesador')}}" 
        class="form-control" rows="5" maxlength="600"></textarea>
</div>

<div class="form-group">
    <label for="precio">Precio </label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">$</span>
        </div>
        <input type="number" class="form-control" name="precio" id="precio" 
            value="{{ isset($empleado->precio) ? $empleado->precio : old('precio') }}" step="0.01" required>
    </div>
</div>


</div></div>
{{-- aqui termina la primera seccion --}}


{{-- AQUI INICIA LA SECION DE LA RAM --}}
<div class="card border-info mb-3" id="inputsuperoculto2">
    <div class="card-header bg-success" >Memoria ram</div>
    <div class="card-body">

<div class="form-group">
    <label for="activo">Descripcion</label>
    
    <textarea name="memoriaram" id="memoriaram" value="{{ isset($empleado->memoriaram)?$empleado->memoriaram:old('memoriaram')}}" 
        class="form-control" rows="5" maxlength="600"></textarea>
    

    {{-- <input class="form-control" type="text" name="memoriaram" id='memoriaram' 
    value="{{ isset($empleado->memoriaram)?$empleado->memoriaram:old('memoriaram')}}"> --}}
</div>


<div class="form-group">
    <label for="activo">Capacidad</label>    
    <input class="form-control" type="text" name="capacidad_ram" id='capacidad_ram' 
    value="{{ isset($empleado->capacidad_ram)?$empleado->capacidad_ram:old('capacidad_ram')}}">
</div>

<div class="form-group">
    <label for="activo">Cantidad</label>    
    <input class="form-control" type="text" name="cantidad_ram" id='cantidad_ram' 
    value="{{ isset($empleado->cantidad_ram)?$empleado->cantidad_ram:old('cantidad_ram')}}">
</div>
</div>
</div>

{{-- AQUI INICIA DISCO DURO --}}
<div class="card border-info mb-3" id="inputsuperoculto3" >
    <div class="card-header bg-success">Disco Duro</div>
    <div class="card-body">
        <div class="form-group">
            <label for="activo">Capacidad</label>    
            <input class="form-control" type="text" name="capacidad_discoduro" id='capacidad_discoduro' 
            value="{{ isset($empleado->capacidad_discoduro)?$empleado->capacidad_discoduro:old('capacidad_discoduro')}}">
        </div>
        <div class="form-group">
            <label for="activo">Tecnologia</label>    
                {{-- <input class="form-control" type="text" name="tegnologia" id='tegnologia' 
                value="{{ isset($empleado->tegnologia)?$empleado->tegnologia:old('tegnologia')}}"> --}}
            
            <select class="person4" name="tegnologia" id="tegnologia"  style="width: 100% ">
                <option  value="">SELECCIONAR</option>
                
                <option  value="SOLIDO">SOLIDO</option>
                <option  value="MECANICO">MECANICO</option>
               
              </select>
        
        
        </div>
        <div class="form-group">
            <label for="activo">Cantidad</label>    
            <input class="form-control" type="text" name="cantidad_discoduro" id='cantidad_discoduro' 
            value="{{ isset($empleado->cantidad_discoduro)?$empleado->cantidad_discoduro:old('cantidad_discoduro')}}">
        </div>

</div>
</div>
{{-- AQUI TERMINA DISCO DURO --}}

</div>

</div>

</div>
{{-- aqui termina la de la ram --}}




<div class="col-lg-4">
        
    <div class="card card-info card-outline card-tabs">
        <div class="card-header">
            <h2 class="card-title text-center">
                  <i class="fas fa-laptop" style="font-size: 45px; color: #3333ff; "></i>
                  
                  
            </h2>

            
        </div>
        
        {{-- aqui inicia detalles --}}
        <div class="card-body" id="inputsuperoculto">

            <div class="card border-info mb-3" >
                <div class="card-header bg-success">DETALLES</div>
                <div class="card-body">

                    <label for="Nombre">Sistema Operativo</label>
    <select class="person6" name="sistema_operativo" id="sistema_operativo" style="width: 100%" >
        <option  value="">SELECCIONAR</option>
        <option value="Windows ">Microsoft Windows</option>
        <option value="Linux ">Linux</option>
        <option value="Chrome OS">macOS</option>
        <option value="Chrome OS">Chrome OS</option> 
        <option value="FreeBSD ">FreeBSD </option>
        <option value="ReactOS">ReactOS</option>
        <option value="Solaris">Solaris</option>    
        <option value="Ubuntu">Ubuntu</option>  
        <option value="Android ">Android </option>
        <option value="iOS ">iOS </option> 
        <option value="KaiOS ">KaiOS </option>
    
    </select>


                    {{-- <div class="form-group">
                        <label for="activo">Sistema Operativo</label>    
                        <input class="form-control" type="text" name="sistema_operativo" id='sistema_operativo' 
                        value="{{ isset($empleado->sistema_operativo)?$empleado->sistema_operativo:old('sistema_operativo')}}">
                    </div> --}}

                    <div class="form-group">
                        <label for="activo">nombre_aw</label>    
                        <input class="form-control" type="text" name="nombre_aw" id='nombre_aw' 
                        value="{{ isset($empleado->nombre_aw)?$empleado->nombre_aw:old('nombre_aw')}}">
                    </div>

                    <div class="form-group">
                        <label for="activo">ip</label>    
                        <input class="form-control" type="text" name="ip" id='ip' 
                        value="{{ isset($empleado->ip)?$empleado->ip:old('ip')}}">
                    </div>
                    <div class="form-group">
                        <label for="activo">mac</label>    
                        <input class="form-control" type="text" name="mac" id='mac' 
                        value="{{ isset($empleado->mac)?$empleado->mac:old('mac')}}">
                    </div>
                    <div class="form-group">
                        <label for="activo">fecha_mantenimiento</label>    
                        <input class="form-control" type="date" name="fecha_mantenimiento" id='fecha_mantenimiento' 
                        value="{{ isset($empleado->fecha_mantenimiento)?$empleado->fecha_mantenimiento:old('fecha_mantenimiento')}}">
                    </div>

                </div>
            </div>
            {{-- aqui termina detalles --}}

            {{-- aqui comienza software --}}
            <div class="card border-info mb-3" >
                <div class="card-header bg-success">SOFTWARE</div>
                <div class="card-body">

                    <div class="form-group">
                        <label for="activo">oficce</label>    
                        <input class="form-control" type="text" name="oficce" id='oficce' 
                        value="{{ isset($empleado->oficce)?$empleado->oficce:old('oficce')}}">
                    </div>

                    <div class="form-group">
                        <label for="activo">tipo</label>    
                        <input class="form-control" type="text" name="tipo" id='tipo' 
                        value="{{ isset($empleado->tipo)?$empleado->tipo:old('tipo')}}">
                    </div>

                    <div class="form-group">
                        <label for="activo">correo_ofice</label>    
                        <input class="form-control" type="text" name="correo_ofice" id='correo_ofice' 
                        value="{{ isset($empleado->correo_ofice)?$empleado->correo_ofice:old('correo_ofice')}}">
                    </div>

                    <div class="form-group">
                        <label for="activo">antivirus</label>    
                        <input class="form-control" type="text" name="antivirus" id='antivirus' 
                        value="{{ isset($empleado->antivirus)?$empleado->antivirus:old('antivirus')}}">
                    </div>

                    <div class="form-group">
                        <label for="activo">acceso_remoto</label>    
                        <input class="form-control" type="text" name="acceso_remoto" id='acceso_remoto' 
                        value="{{ isset($empleado->acceso_remoto)?$empleado->acceso_remoto:old('acceso_remoto')}}">
                    </div>
                </div>
            </div>

                    {{-- AQUI TERMINA --}}

                    
   
    
    

    
</div>
</div>
</div>
{{-- aqui va la ultinma seccion --}}
<div class="col-lg-4">
    <div class="card card-info card-outline card-tabs">
        <div class="card-header">
            <h2 class="card-title text-center">
                  <i class="fas fa-laptop" style="font-size: 45px; color: #3333ff; "></i>
                  </h2>
                </div>
                
                 
        
    
        <div class="card-body" id="inputsuperoculto1" >



             {{-- aqui comienza copia de seguridad --}}

             <div class="card border-info mb-3" >
                <div class="card-header bg-success">COPIA DE SEGURIDAD</div>
                <div class="card-body">

                    <div class="form-group">
                        <label for="activo">copia_seguridad</label>    
                        
                        
                        <select class="person3" name="copia_seguridad" id="copia_seguridad"  style="width: 100% ">
                            <option  value="">SELECCIONAR</option>
                            
                            <option  value="SI">SI</option>
                            <option  value="NO">NO</option>
                           
                          </select>
                    
                    </div>
                    <div id='inputsuperoculto_copiseg'>
                    <div class="form-group">
                        <label for="activo">nombre_carpeta</label>    
                        <input class="form-control" type="text" name="nombre_carpeta" id="nombre_carpeta" 
                        value="{{ isset($empleado->nombre_carpeta)?$empleado->nombre_carpeta:old('nombre_carpeta')}}">
                    </div>

                    <div class="form-group">
                        <label for="activo">correo_copiaseg</label>    
                        <input class="form-control" type="text" name="correo_copiaseg" id='correo_copiaseg' 
                        value="{{ isset($empleado->correo_copiaseg)?$empleado->correo_copiaseg:old('correo_copiaseg')}}">
                    </div>
                </div>
                </div>
            </div>
        {{-- aqui termina  --}}

       
       
{{-- 
        <div class="card border-info mb-3" >
            <div class="card-header bg-success">BOARD</div>
            <div class="card-body">
                
                <div class="form-group">
                    <label for="activo">Board</label>    
                    <input class="form-control" type="text" name="board" id='board' 
                    value="{{ isset($empleado->board)?$empleado->board:old('board')}}">
                </div>




            </div>
        </div> --}}

      
</div>
</div>

 {{-- AQUI COMIENZA RESPONSABLE --}}

 {{-- <div class="card border-info mb-3" >
    <div class="card-header bg-success">RESPONSABLE</div>
    <div class="card-body"> --}}

        {{-- <div class="form-group" >
            <label for="Nombre">RESPONSABLE</label>
            <select class="person " name="people_id" id="people_id"  style="width: 100% ">
            <option  value="0">SELECCIONAR</option>
            @foreach($persona as $developer)
            <option  value="{{$developer->id}}">{{$developer->nombres}}</option>
            @endforeach 
            
          </select>
        </div> --}}

{{-- </div>   </div> --}}

{{-- AQUI TERMINA --}}


  {{-- AQUI COMIENZA PERIFERICOS --}}

  <div class="card border-info mb-3" >
    <div class="card-header bg-success">FOTO</div>
    <div class="card-body">
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

{{-- AQUI TERMINA PERIFERICOS --}}


<input class="btn btn-success" type="submit" value="enviar">
<a  class="btn btn-primary" href="{{url('item')}}"  class="btn  btn-success"> REGRESAR</a>