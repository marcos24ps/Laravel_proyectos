<?php

namespace App\Repositories;

use App\Models\Pedido;
use App\Repositories\BaseRepository;

class PedidoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'fecha',
        'id_cliente',
        'id_producto'
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
