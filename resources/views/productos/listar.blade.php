@extends('layouts.main')

@section('content')
    @foreach($productos as $producto)
        <div class="producto">
            <img src="{{ asset($producto->imagen)}}" alt="{{$producto->nombre}}" class="producto__imagen">
            <h2 class="producto__nombre">{{$producto->nombre}}</h2>
            <h3 class="producto__precio">$990</h3>            
            <button class="btn btn-success btn-block" data-action="addToCart" id="btn__add"> agregar a la canasta</button>
        </div>
    @endforeach    
   


@endsection





