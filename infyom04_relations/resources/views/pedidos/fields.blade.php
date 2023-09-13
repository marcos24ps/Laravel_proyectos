<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control','id'=>'fecha']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha').datepicker()
    </script>
@endpush

<!-- Id Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cliente', 'Id Cliente:') !!}
    {!! Form::text('id_cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_producto', 'Id Producto:') !!}
    {!! Form::text('id_producto', null, ['class' => 'form-control']) !!}
</div>