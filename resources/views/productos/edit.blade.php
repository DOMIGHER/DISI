@extends ('layouts.app')
@section('content')

<div class="card mt-3">
    <div >
        <h2>Formulario para editar un Formulario</h2>
        <a href="{{route ('productos.index')}}" class="btn btn-primary ml-auto">
        <i class="fas fa-plus"></i>
        Volver
        </a>
    </div>
</div>

<div class="card-body">
    <form action="{{route ('productos.update', $producto->idProducto)}}" method="POST" id="create">
    @method('PUT')
    @include('productos.partials.form')
    </form>
</div>

<div class="card-footer">
    <button class="btn btn-primary" form="create">
    <i class="fas fa-pen"></i>
    Guardar cambios
</div>
@endsection