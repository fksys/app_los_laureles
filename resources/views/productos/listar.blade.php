@extends('layouts.main')

@section('content')
    
        @foreach($productos as $producto)
            <div class="producto">
                <img src="{{ asset($producto->imagen)}}" alt="{{$producto->nombre}}" class="producto__imagen">
                <p  class="producto__nombre"><strong>{{$producto->nombre}}</strong></p>
                <p  class="producto__unidad">1 {{$producto->unidad_medida}}</p>
                <p  class="producto__precio"><strong>$ {{$producto->precio}} </strong></p>            
                <button class="btn btn-add btn-block" data-action="addToCart" id="btn__add"> agregar a la canasta</button>
            </div>
        @endforeach  
    
@endsection





