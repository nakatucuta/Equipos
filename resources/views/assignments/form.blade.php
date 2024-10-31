@include('assignments.mensajes')

<div class="form-group">
  <label for="Nombre">RESPONSABLE</label>
  <select class="person" name="people_id" id="people_id" style="width: 100%">
    <option value="0">SELECCIONAR</option>
    @foreach($persona as $developer)
      <option value="{{ $developer->id }}">{{ $developer->nombres }}</option>
    @endforeach
  </select>
</div>

<div class="form-group">
  <label for="Nombre">Items Disponibles</label>
  <ul id="itemList" class="list-group">
    @foreach($item as $developer)
      <li class="list-group-item available-item" data-id="{{ $developer->id }}">{{ $developer->service_tag }}</li>
    @endforeach
  </ul>
</div>

<div class="form-group">
  <label for="Nombre">Items Asignados</label>
  <ul id="assignedItems" class="list-group">
    <!-- Los ítems seleccionados se mostrarán aquí -->
  </ul>
</div>

<form action="{{ route('assignments.store') }}" method="POST">
  @csrf
  <!-- Campos ocultos para enviar IDs -->
  <input type="hidden" name="people_id" id="selectedPerson">
  <input type="hidden" name="item_id" id="assignedItemIds">
  
  <button type="submit" class="btn btn-success">Asignar</button>
  <a href="{{ url('person') }}" class="btn btn-primary">Regresar</a>
</form>
