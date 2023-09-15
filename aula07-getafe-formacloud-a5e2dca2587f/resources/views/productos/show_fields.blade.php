<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $producto->nombre }}</p>
</div>

<!-- Unidades Field -->
<div class="col-sm-12">
    {!! Form::label('unidades', 'Unidades:') !!}
    <p>{{ $producto->unidades }}</p>
</div>

<!-- Precio Field -->
<div class="col-sm-12">
    {!! Form::label('precio', 'Precio:') !!}
    <p>{{ $producto->precio }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $producto->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $producto->updated_at }}</p>
</div>

