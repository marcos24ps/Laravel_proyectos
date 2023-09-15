<!-- Fecha Pedido Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_pedido', 'Fecha Pedido:') !!}
    <p>{{ $pedido->fecha_pedido }}</p>
</div>

<!-- Unidades Field -->
<div class="col-sm-12">
    {!! Form::label('unidades', 'Unidades:') !!}
    <p>{{ $pedido->unidades }}</p>
</div>

<!-- Idcliente Field -->
<div class="col-sm-12">
    {!! Form::label('idcliente', 'Idcliente:') !!}
    <p>{{ $pedido->idcliente }}</p>
</div>

<!-- Idproducto Field -->
<div class="col-sm-12">
    {!! Form::label('idproducto', 'Idproducto:') !!}
    <p>{{ $pedido->idproducto }}</p>
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

