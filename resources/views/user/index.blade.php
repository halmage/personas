@extends('layouts.app')

@section('content')
    @component('components._card-xl')
        @slot('title', 'presentacion')
            <div class="row">
                <div class="col-md-6">                    
                    <img src="{{ asset('img/user/home/supermercado.jpg') }}" class="shadow">
                </div>
                <div class="col-md-6 shadow p-5">              
                    <h2 class="text-uppercase">Super mercado</h2>      
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <a href="{{ route('user-product.index') }}">Ver más</a>
                    </p>
                </div>
            </div>

            {{-- Segunda etapa --}}
            <div class="row mt-3">
                <div class="col-md-6 shadow p-5">              
                    <h2 class="text-uppercase">tarantines</h2>      
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <a href="#">Ver más</a>
                    </p>
                </div>
                <div class="col-md-6">                    
                    <img src="{{ asset('img/user/home/tarantines.jpg') }}" class="shadow" width="500" height="314">
                </div>                
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('img/user/home/principal.jpg') }}"
                        width="1000" 
                        height="500" 
                        class="shadow" 
                    >
                </div>
                <div class="col-md-4 shadow p-5">
                    <h3 class="text-uppercase lead">bebe en carrito</h3>
                    <img src="{{ asset('img/user/home/bebe-en-carrito.jpg') }}" 
                        width="250" 
                        height="200">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. <a href="#">Ver más</a>
                    </p>
                </div>

                <div class="col-md-4 shadow p-5">
                    <h3 class="text-uppercase lead">verduras frescas</h3>
                    <img src="{{ asset('img/user/home/frutas.jpg') }}" 
                        width="250" 
                        height="200">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. <a href="#">Ver más</a>
                    </p>
                </div>

                <div class="col-md-4 shadow p-5">
                    <h3 class="text-uppercase lead">gran supermercado</h3>
                    <img src="{{ asset('img/user/home/parte-principal-supermercado.jpg') }}" 
                        width="250" 
                        height="200">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. <a href="#">Ver más</a>
                    </p>
                </div>
            </div>
        @endcomponent
@endsection
