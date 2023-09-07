<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
    </head>
<body>
<h2>Añadir nuevo libro</h2>
<form method="post" action="{{ route('libro.create') }}">
    @csrf
    <label>Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <label>Autor</label>
    <input type="text" name="autor" id="autor">
    <label>Opinión</label>
    <input type="text" name="opinion" id="opinion">
    <input type="submit" name="send" value="Guardar libro" class="bg-gray-500 p-1 cursor-pointer
    border border-black">
   </form>
</body>
</html>