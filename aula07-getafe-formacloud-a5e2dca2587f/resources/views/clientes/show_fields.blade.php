<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $cliente->email }}</p>
</div>

<!-- Ciudad Field -->
<div class="col-sm-12">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    <p>{{ $cliente->ciudad }}</p>
</div>

<!-- Nuevo Cliente Field -->
<div class="col-sm-12">
    {!! Form::label('nuevo_cliente', 'Nuevo Cliente:') !!}
    <p>{{ $cliente->nuevo_cliente }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $cliente->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $cliente->updated_at }}</p>
</div>

