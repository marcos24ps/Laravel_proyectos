
@foreach ($reservas as $reserva)
 <p>Nombre del hotel: {{ $reserva->nombre }}</p>
 <p>Fecha de entrada: {{ $reserva->fecha_entrada }}</p>
 <p>Fecha de salida: {{ $reserva->fecha_salida }}</p>
 <p>Número de personas: {{ $reserva->numero_personas }}</p>
@endforeach

<form method="post" action="{{ route('inicio.create') }}">
    <input type="submit" name="send" value="Volver">
</form>