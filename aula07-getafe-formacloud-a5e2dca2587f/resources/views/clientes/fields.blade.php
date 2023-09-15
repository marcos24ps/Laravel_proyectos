<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Ciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    {!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
</div>

<!-- Nuevo Cliente Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('nuevo_cliente', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('nuevo_cliente', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('nuevo_cliente', 'Nuevo Cliente', ['class' => 'form-check-label']) !!}
    </div>
</div>