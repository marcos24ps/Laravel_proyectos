<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control','id'=>'fecha']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha').datepicker()
    </script>
@endpush

<!-- Id Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_clientel', 'Id Cliente:') !!}
    {!! Form::select('id_cliente',$clientes, null, ['class' => 'form-control']) !!}
</div>

<!-- Id Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_productol', 'Id Producto:') !!}
    {!! Form::select('id_producto',$productos, null, ['class' => 'form-control']) !!}
</div>