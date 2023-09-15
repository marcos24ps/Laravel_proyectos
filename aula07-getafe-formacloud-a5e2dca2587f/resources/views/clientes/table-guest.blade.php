<x-layout bodyClass="">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <x-navbars.navs.guest signup='register' signin='login'></x-navbars.navs.guest>
            </div>
        </div>
    </div>
    <div class="page-header justify-content-center min-vh-100">
        <span class="mask bg-gray-900 opacity-6"></span>
        <div class="container">
            <div class="table-responsive">
                <table class="table text-white" id="pedidos-table">
                <thead>
            <tr>
                <th>Email</th>
                <th>Ciudad</th>
                <th>Nuevo Cliente</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->ciudad }}</td>
                    <td>{{ $cliente->nuevo_cliente }}</td>
                </tr>
            @endforeach
            </tbody>
                </table>
            </div>
        </div>
    </div>

    <x-footers.guest></x-footers.guest>
</x-layout>