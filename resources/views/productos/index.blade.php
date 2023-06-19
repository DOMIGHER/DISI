@extends ('layouts.app')
@section('content')

<div class="card mt-3">
    <div>
        <h3>Productos</h3>
        <a href="{{route ('productos.create', 'productos.update') }}" class="btn btn-primary ml-auto">
            <i class="fas fa-plus"></i>
            Agregar
        </a>
    </div>
</div>


<div class="card-body">
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Expiracion</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <th scope="row">{{$producto->idProducto}}</th>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->expiracion}}</td>
                    <td>{{$producto->stock}}</td>

                    <td>
                        <a href="{{route ('productos.show',  $producto->idProducto)}}"> <i class="fas fa-plus"></i> </a>
                        <a href="{{route ('productos.edit', $producto->idProducto)}}"> <i class="fas fa-pen"></i> </a>
                        <a href="{{--route ('productos.destroy')--}}"> <i class="fas fa-delete-left"></i> </a>




                        <button type="submit" class="btn btn-danger btn-sm" form="delete_{{$producto->idProducto}}"
                            onclick="return confirm('¿Estás seguro de eliminar el registro?')">
                            <i class="fas fa-trash"></i>
                        </button>
                        <form action="{{route('productos.destroy', $producto->idProducto)}}"
                            id="delete_{{$producto->idProducto}}" method="post" enctype="multipart/form-data" hidden>
                            @csrf
                            @method('DELETE')
                        </form>


                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>

<div class="card-footer">

</div>

@endsection