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

<!-- Unidades Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidades', 'Unidades:') !!}
    {!! Form::number('unidades', null, ['class' => 'form-control']) !!}
</div>