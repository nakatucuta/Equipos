<div class="form-group">
    <label for="activo">Nombre Completo</label>    
    <input class="form-control" type="text" name="nombres" id='nombres' 
    value="{{ isset($empleado->nombres)?$empleado->nombres:old('nombres')}}">
</div>


<div class="form-group">
  <label for="activo">Cargo</label>    
  <input class="form-control" type="text" name="cargo" id='cargo' 
  value="{{ isset($empleado->cargo)?$empleado->cargo:old('cargo')}}">
</div>


<div class="form-group">
<label for="activo">Direccion</label>    
<input class="form-control" type="text" name="direccion" id='direccion' 
value="{{ isset($empleado->direccion)?$empleado->direccion:old('direccion')}}">
</div>

<input class="btn btn-success" type="submit" value="enviar">
<a  class="btn btn-primary" href="{{url('person')}}" class="btn  btn-success"> REGRESAR</a>

