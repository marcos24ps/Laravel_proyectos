<!-- Fecha Pedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_pedido', 'Fecha Pedido:') !!}
    {!! Form::date('fecha_pedido', isset($pedido) ? $pedido->fecha_pedido : null, ['class' => 'form-control','id'=>'fecha_pedido']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_pedido').datepicker()
    </script>
@endpush

<!-- Unidades Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidades', 'Unidades:') !!}
    {!! Form::number('unidades', null, ['class' => 'form-control']) !!}
</div>

<!-- Idcliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcliente', 'Idcliente:') !!}
    {!! Form::select('idcliente',$clientes, null, ['class' => 'form-control']) !!}
</div>

<!-- Idproducto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idproducto', 'Idproducto:') !!}
    {!! Form::select('idproducto',$productos, null, ['class' => 'form-control']) !!}
</div>