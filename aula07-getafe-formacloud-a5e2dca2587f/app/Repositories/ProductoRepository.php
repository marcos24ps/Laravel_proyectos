<?php

namespace App\Repositories;

use App\Models\Producto;
use App\Repositories\BaseRepository;

class ProductoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nombre',
        'unidades',
        'precio'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Producto::class;
    }
}
