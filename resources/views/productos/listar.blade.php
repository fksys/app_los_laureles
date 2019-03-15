@extends('layouts.main')


@section('sidebar')
    @include('layouts.sidebar')
@endsection
@section('content')
    
    <section class="container__producto row justify-content-center">
        <div class="col-md-3">
            <div class="producto">
                <img src="{{ asset('imagenes/juice.png')}}" alt="Juice" class="producto__imagen">
                <h2 class="producto__nombre">Juice</h2>
                <h3 class="producto__precio">$990</h3>            
                <input type="button" class="btn btn-success btn-block" data-action="addToCart" id="btn__add" value="Agregar">
            </div>
        </div>
        <div class="col-md-3">
            <div class="producto">
                <img src="{{ asset('imagenes/banana.png')}}" class="producto__imagen" alt="banana">               
                <h2 class="producto__nombre">banana</h2>
                <h3 class="producto__precio">$2090</h3>
                <input type="button" class="btn btn-success btn-block" data-action="addToCart" id="btn__add" value="Agregar">
            </div>
        </div>
        <div class="col-md-3">
                <div class="producto">
                    <img src="{{ asset('imagenes/juice.png')}}" alt="Juice" class="producto__imagen">
                    <h2 class="producto__nombre">Juice</h2>
                    <h3 class="producto__precio">$990</h3>            
                    <input type="button" class="btn btn-success btn-block" data-action="addToCart" id="btn__add" value="Agregar">
                </div>
            </div>
            <div class="col-md-3">
                <div class="producto">
                    <img src="{{ asset('imagenes/banana.png')}}" class="producto__imagen" alt="banana">               
                    <h2 class="producto__nombre">banana</h2>
                    <h3 class="producto__precio">$2090</h3>
                    <input type="button" class="btn btn-success btn-block" data-action="addToCart" id="btn__add" value="Agregar">
                </div>
            </div>
    </section>
    <div class="col-4">
        <div class="cart">

        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection





