<!-- Id Cliente Field -->
<div class="col-sm-12">
    {!! Form::label('id_cliente', 'Id Cliente:') !!}
    <p>{{ $pedido->id_cliente }}</p>
</div>

<!-- Id Producto Field -->
<div class="col-sm-12">
    {!! Form::label('id_producto', 'Id Producto:') !!}
    <p>{{ $pedido->id_producto }}</p>
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

