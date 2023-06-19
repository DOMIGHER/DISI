@extends ('layouts.app')
@section('content')

<div class="card mt-3">
    <div >
        <h2>Formulario para ver ID:  {{$producto->idProducto}}</h2>
        <a href="{{route ('productos.index')}}" class="btn btn-primary ml-auto">
        <i class="fas fa-plus"></i>
        Volver
        </a>
    </div>
</div>

<div class="card-body">
    <form action="{{route ('productos.store', $productos->idProductos)}}" method="POST" encrip>
    @mothod('PUT')
    @include('productos.partials.form')
    </form>
</div>

<div class="card-footer">
    
</div>
@endsection