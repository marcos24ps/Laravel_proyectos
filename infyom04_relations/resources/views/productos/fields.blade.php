<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', 'Precio:') !!}
    {!! Form::number('precio', null, ['class' => 'form-control']) !!}
</div>

<!-- Unidades Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidades', 'Unidades:') !!}
    {!! Form::number('unidades', null, ['class' => 'form-control']) !!}
</div>