<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePedidoAPIRequest;
use App\Http\Requests\API\UpdatePedidoAPIRequest;
use App\Models\Pedido;
use App\Repositories\PedidoRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

/**
 * Class PedidoAPIController
 */
class PedidoAPIController extends AppBaseController
{
    private PedidoRepository $pedidoRepository;

    public function __construct(PedidoRepository $pedidoRepo)
    {
        $this->pedidoRepository = $pedidoRepo;
    }

    /**
     * Display a listing of the Pedidos.
     * GET|HEAD /pedidos
     */
    public function index(Request $request): JsonResponse
    {
        $pedidos = $this->pedidoRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($pedidos->toArray(), 'Pedidos retrieved successfully');
    }

    /**
     * Store a newly created Pedido in storage.
     * POST /pedidos
     */
    public function store(CreatePedidoAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $pedido = $this->pedidoRepository->create($input);

        return $this->sendResponse($pedido->toArray(), 'Pedido saved successfully');
    }

    /**
     * Display the specified Pedido.
     * GET|HEAD /pedidos/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var Pedido $pedido */
        $pedido = $this->pedidoRepository->find($id);

        if (empty($pedido)) {
            return $this->sendError('Pedido not found');
        }

        return $this->sendResponse($pedido->toArray(), 'Pedido retrieved successfully');
    }

    /**
     * Update the specified Pedido in storage.
     * PUT/PATCH /pedidos/{id}
     */
    public function update($id, UpdatePedidoAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Pedido $pedido */
        $pedido = $this->pedidoRepository->find($id);

        if (empty($pedido)) {
            return $this->sendError('Pedido not found');
        }

        $pedido = $this->pedidoRepository->update($input, $id);

        return $this->sendResponse($pedido->toArray(), 'Pedido updated successfully');
    }

    /**
     * Remove the specified Pedido from storage.
     * DELETE /pedidos/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var Pedido $pedido */
        $pedido = $this->pedidoRepository->find($id);

        if (empty($pedido)) {
            return $this->sendError('Pedido not found');
        }

        $pedido->delete();

        return $this->sendSuccess('Pedido deleted successfully');
    }
}
