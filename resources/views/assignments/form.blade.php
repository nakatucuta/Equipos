@include('assignments.mensajes')



<div class="form-group" >
  <label for="Nombre">RESPONSABLE</label>
  <select class="person " name="people_id" id="people_id"  style="width: 100% ">
  <option  value="0">SELECCIONAR</option>
  @foreach($persona as $developer)
  <option  value="{{$developer->id}}">{{$developer->nombres}}</option>
  @endforeach 
  
</select>
</div>


<div class="form-group">
  <label for="Nombre">Item</label>
  <select class="persona" name="item_id[]" id="item_id" style="width: 100%" multiple>
    <option value="0">SELECCIONAR</option>
    @foreach($item as $developer)
    <option value="{{ $developer->id }}" data-img="{{ asset('storage').'/'.$developer->foto }}">{{ $developer->service_tag}}</option>
    @endforeach
  </select>
</div>



<input class="btn btn-success" type="submit" value="enviar">
<a  class="btn btn-primary" href="{{url('person')}}" class="btn  btn-success"> REGRESAR</a>

