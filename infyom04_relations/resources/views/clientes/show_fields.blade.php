<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $cliente->nombre }}</p>
</div>

<!-- Ciudad Field -->
<div class="col-sm-12">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    <p>{{ $cliente->ciudad }}</p>
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

