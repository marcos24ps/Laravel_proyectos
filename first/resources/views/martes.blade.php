<h2>Hoy es martes</h2>
<img src="{{ asset("img/ciervo.webp") }}" alt="imagen" width=300>
<img src="img/ciervo.webp" alt="imagen webp" width=800>

<hr>
<form method="post" action="{{ route('producto.create') }}">
    @csrf
    <label>Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <label>Unidades</label>
    <input type="number" name="unidades" id="unidades">
    <label>Precio</label>
    <input type="number" name="precio" id="precio">
    <input type="submit" name="send" value="Guardar producto">
   </form>