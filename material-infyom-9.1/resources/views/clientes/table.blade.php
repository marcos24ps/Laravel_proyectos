<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="clientes-table">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->apellido }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['clientes.destroy', $cliente->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('clientes.show', [$cliente->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('clientes.edit', [$cliente->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $clientes])
        </div>
    </div>
</div>
