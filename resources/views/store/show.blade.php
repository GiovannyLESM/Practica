@extends('store.template')
@section('content')
    <h1>Detalle de Producto</h1>
    <div class="product-block">
        <img src="{{$product->image}}" width="300">
    </div>
    <div class="product-block">
        <h3>{{$product->name}}</h3><hr>
        <div class="product-info">
            <p>{{$product->description}}</p>
            <p>Precio: ${{number_format($product->price,2)}}</p>
            <p>
                <a href="#">La Quiero</a>
            </p>
        </div>
    </div>
    <p><a href="/">Regresar</a></p>
@stop