<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProductoAPIRequest;
use App\Http\Requests\API\UpdateProductoAPIRequest;
use App\Models\Producto;
use App\Repositories\ProductoRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

/**
 * Class ProductoAPIController
 */
class ProductoAPIController extends AppBaseController
{
    private ProductoRepository $productoRepository;

    public function __construct(ProductoRepository $productoRepo)
    {
        $this->productoRepository = $productoRepo;
    }

    /**
     * Display a listing of the Productos.
     * GET|HEAD /productos
     */
    public function index(Request $request): JsonResponse
    {
        $productos = $this->productoRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($productos->toArray(), 'Productos retrieved successfully');
    }

    /**
     * Store a newly created Producto in storage.
     * POST /productos
     */
    public function store(CreateProductoAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $producto = $this->productoRepository->create($input);

        return $this->sendResponse($producto->toArray(), 'Producto saved successfully');
    }

    /**
     * Display the specified Producto.
     * GET|HEAD /productos/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var Producto $producto */
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            return $this->sendError('Producto not found');
        }

        return $this->sendResponse($producto->toArray(), 'Producto retrieved successfully');
    }

    /**
     * Update the specified Producto in storage.
     * PUT/PATCH /productos/{id}
     */
    public function update($id, UpdateProductoAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Producto $producto */
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            return $this->sendError('Producto not found');
        }

        $producto = $this->productoRepository->update($input, $id);

        return $this->sendResponse($producto->toArray(), 'Producto updated successfully');
    }

    /**
     * Remove the specified Producto from storage.
     * DELETE /productos/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var Producto $producto */
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            return $this->sendError('Producto not found');
        }

        $producto->delete();

        return $this->sendSuccess('Producto deleted successfully');
    }
}
