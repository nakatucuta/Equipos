<div class="form-group">
    <label for="activo">Nombre </label>    
    <input class="form-control" type="text" name="nombre_periferico" id='nombre_periferico' 
    value="{{ isset($empleado->nombre_periferico)?$empleado->nombre_periferico:old('nombre_periferico')}}">
</div>


<div class="form-group">
  <label for="activo">Fecha de compra</label>    
  <input class="form-control" type="date" name="fecha_compra" id='fecha_compra' 
  value="{{ isset($empleado->fecha_compra)?$empleado->fecha_compra:old('fecha_compra')}}">
</div>


<div class="form-group">
<label for="activo">Marca</label>    
<input class="form-control" type="text" name="marca" id='marca' 
value="{{ isset($empleado->marca)?$empleado->marca:old('marca')}}">
</div>


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

      <div class="form-group">
        <label for="Nombre">EQUIPO</label>
        <select class="person" name="Items_id" id="Items_id" style="width: 100%">
            <option value= "0" data-img="{{ asset('storage/uploads/descarga.png')}}">SELECCIONAR</option>
            @foreach($item as $developer)
                <option value="{{ $developer->id }}" data-img="{{ asset('storage').'/'.$developer->foto }}">
                    {{ $developer->marca.' '.$developer->service_tag }}
                </option>
            @endforeach
        </select>

    </div>
      

<input class="btn btn-success" type="submit" value="ENVIAR">
<a  class="btn btn-primary" href="{{url('person')}}" class="btn  btn-success"> REGRESAR</a>

