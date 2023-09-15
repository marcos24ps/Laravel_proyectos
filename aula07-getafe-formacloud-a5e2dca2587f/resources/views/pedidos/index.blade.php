<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="tables"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Tables"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pedidos</h1>
                    </div>
                    <div class="col-sm-6">
                        <a class="btn btn-primary float-right" href="{{ route('pedidos.create') }}">
                            Add New
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="content px-3">

            @include('flash::message')

            <div class="clearfix"></div>

            <div class="card">
                @include('pedidos.table')
            </div>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>