<!-- Fecha Field -->
<div class="col-sm-12">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $pedido->fecha }}</p>
</div>

<!-- Unidades Field -->
<div class="col-sm-12">
    {!! Form::label('unidades', 'Unidades:') !!}
    <p>{{ $pedido->unidades }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pedido->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pedido->updated_at }}</p>
</div>

