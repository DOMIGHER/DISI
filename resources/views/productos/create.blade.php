@extends ('layouts.app')
@section('content')

<div class="card mt-3">
<div class="card-header d-inline-flex"></div>
<h5>Formulario</h5>
<a href="{{route('productos.create')}}" class="btn btn- ml-auto"></a>
<i class="fas fa-arrow-left"></i>
volver
</div>

<div class="card-body">
    <form action="{{route('productos.store')}}" method="POST" encrype="multipart/form-date" id="create">
        @include('productos.partials.form');
    </form>
</div>

<div class="card-footer">
    <button class="btn btn-primary" form="create">
        <i class="fas fa-plus"></i>
        Crear
    </button>

</div>

@endsection