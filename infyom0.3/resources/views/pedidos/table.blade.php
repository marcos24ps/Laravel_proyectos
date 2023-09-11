<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="pedidos-table">
            <thead>
            <tr>
                <th>Fecha</th>
                <th>Unidades</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->fecha }}</td>
                    <td>{{ $pedido->unidades }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['pedidos.destroy', $pedido->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('pedidos.show', [$pedido->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('pedidos.edit', [$pedido->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $pedidos])
        </div>
    </div>
</div>
