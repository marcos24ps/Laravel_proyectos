<?php

namespace App\Repositories;

use App\Models\Pedido;
use App\Repositories\BaseRepository;

class PedidoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'fecha_pedido',
        'unidades',
        'idcliente',
        'idproducto'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Pedido::class;
    }
}
