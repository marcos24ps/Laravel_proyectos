<h1>Datos</h1>
<ul>
    @foreach ($tareas as $tarea)
        <li>{{ $tarea->nombre }} </li>
        <li>{{ $tarea->fecha_inicio }} </li>
        <li> {{ $tarea->fecha_fin }} </li>
        <li> {{ $tarea->asignado_a }} </li>
            <ul>
                <li class="flex mb-1">
                <span class="flex-1">{{ $tarea->name }}</span>
                <form action="{{ route('tarea.delete', $tarea->id) }}"
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