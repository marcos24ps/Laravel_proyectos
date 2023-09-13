<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ProductoRepository;
use Illuminate\Http\Request;
use Flash;

class ProductoController extends AppBaseController
{
    /** @var ProductoRepository $productoRepository*/
    private $productoRepository;

    public function __construct(ProductoRepository $productoRepo)
    {
        $this->productoRepository = $productoRepo;
    }

    /**
     * Display a listing of the Producto.
     */
    public function index(Request $request)
    {
        $productos = $this->productoRepository->paginate(10);

        return view('productos.index')
            ->with('productos', $productos);
    }

    /**
     * Show the form for creating a new Producto.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created Producto in storage.
     */
    public function store(CreateProductoRequest $request)
    {
        $input = $request->all();

        $producto = $this->productoRepository->create($input);

        Flash::success('Producto saved successfully.');

        return redirect(route('productos.index'));
    }

    /**
     * Display the specified Producto.
     */
    public function show($id)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        return view('productos.show')->with('producto', $producto);
    }

    /**
     * Show the form for editing the specified Producto.
     */
    public function edit($id)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        return view('productos.edit')->with('producto', $producto);
    }

    /**
     * Update the specified Producto in storage.
     */
    public function update($id, UpdateProductoRequest $request)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        $producto = $this->productoRepository->update($request->all(), $id);

        Flash::success('Producto updated successfully.');

        return redirect(route('productos.index'));
    }

    /**
     * Remove the specified Producto from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        $this->productoRepository->delete($id);

        Flash::success('Producto deleted successfully.');

        return redirect(route('productos.index'));
    }
}
