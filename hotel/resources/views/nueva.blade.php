<hr>
<form method="post" action="{{ route('reserva.create') }}">
    @csrf
    <label>Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <label>Fecha de entrada</label>
    <input type="date" name="fecha_entrada" id="fecha_entrada">
    <label>Fecha de salida</label>
    <input type="date" name="fecha_salida" id="fecha_salida">


    <label>numero_personas</label>
    <input type="number" name="numero_personas" id="numero_personas">
    <input type="submit" name="send" value="Guardar reserva">
   </form>
<hr>