<form method="post" action="{{ route('tarea.create') }}">
    @csrf
    <label>Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <label>Fecha de inicio</label>
    <input type="date" name="fecha_inicio" id="fecha_inicio">
    <label>Fecha de fin</label>
    <input type="date" name="fecha_fin" id="fecha_fin">
    <label>Asignado a</label>
    <input type="text" name="asignado_a" id="asignado_a">
    <input type="submit" name="send" value="Guardar registro">
   </form>