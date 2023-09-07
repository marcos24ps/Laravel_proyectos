<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
</head>

<body class="p-4">
<h2 class="font-bold border-b-gray-300 border-b pb-2 mb-3">Listado de libros</h2>
<ul>
@foreach ($libros as $libro)
 <li>{{ $libro->nombre }} </li>
 <li>{{ $libro->autor }} </li>
 <li> {{ $libro->opinion }} </li>
 <ul>
    <li class="flex mb-1">
    <span class="flex-1">{{ $libro->name }}</span>
    <form action="{{ route('libro.delete', $libro->id) }}"
    method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="border
    bg-gray-200 p-1 border-black">Delete</button>
    </form>
    </li>
   </ul>
 <hr>
@endforeach
</ul>
@include('nuevolibro')
</body>
</html>