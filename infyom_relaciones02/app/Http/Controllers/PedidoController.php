<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePedidoRequest;
use App\Http\Requests\UpdatePedidoRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PedidoRepository;
use Illuminate\Http\Request;
use Flash;

class PedidoController extends AppBaseController
{
    /** @var PedidoRepository $pedidoRepository*/
    private $pedidoRepository;

    public function __construct(PedidoRepository $pedidoRepo)
    {
        $this->pedidoRepository = $pedidoRepo;
    }

    /**
     * Display a listing of the Pedido.
     */
    public function index(Request $request)
    {
        $pedidos = $this->pedidoRepository->paginate(10);

        return view('pedidos.index')
            ->with('pedidos', $pedidos);
    }

    /**
     * Show the form for creating a new Pedido.
     */
    public function create()
    {
        return view('pedidos.create');
    }

    /**
     * Store a newly created Pedido in storage.
     */
    public function store(CreatePedidoRequest $request)
    {
        $input = $request->all();

        $pedido = $this->pedidoRepository->create($input);

        Flash::success('Pedido saved successfully.');

        return redirect(route('pedidos.index'));
    }

    /**
     * Display the specified Pedido.
     */
    public function show($id)
    {
        $pedido = $this->pedidoRepository->find($id);

        if (empty($pedido)) {
            Flash::error('Pedido not found');

            return redirect(route('pedidos.index'));
        }

        return view('pedidos.show')->with('pedido', $pedido);
    }

    /**
     * Show the form for editing the specified Pedido.
     */
    public function edit($id)
    {
        $pedido = $this->pedidoRepository->find($id);

        if (empty($pedido)) {
            Flash::error('Pedido not found');

            return redirect(route('pedidos.index'));
        }

        return view('pedidos.edit')->with('pedido', $pedido);
    }

    /**
     * Update the specified Pedido in storage.
     */
    public function update($id, UpdatePedidoRequest $request)
    {
        $pedido = $this->pedidoRepository->find($id);

        if (empty($pedido)) {
            Flash::error('Pedido not found');

            return redirect(route('pedidos.index'));
        }

        $pedido = $this->pedidoRepository->update($request->all(), $id);

        Flash::success('Pedido updated successfully.');

        return redirect(route('pedidos.index'));
    }

    /**
     * Remove the specified Pedido from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pedido = $this->pedidoRepository->find($id);

        if (empty($pedido)) {
            Flash::error('Pedido not found');

            return redirect(route('pedidos.index'));
        }

        $this->pedidoRepository->delete($id);

        Flash::success('Pedido deleted successfully.');

        return redirect(route('pedidos.index'));
    }
}
