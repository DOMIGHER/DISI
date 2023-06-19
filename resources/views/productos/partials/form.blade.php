@csrf

<div class="row">
    
    <div class="col-12">
        <div class="form-group">
            <lavel for=""> Nombre</lavel>
            <input type="text" class="form-control" name="nombre" value="{{ (isset($producto))?$producto->nombre:old('nombre') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <lavel for="">Descripcion</lavel>
                <input type="text" class="from-control" name="descripcion" value="{{ (isset($producto))?$producto->descripcion:old('descripcion') }}" required>
        </div>
    </div>


    <div class="col-12">
        <div class="form-group">
            <lavel for="">precio</lavel>
                <input type="number" class="from-control" name="precio" value="{{ (isset($producto))?$producto->precio:old('precio') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <lavel for="">Expiracion</lavel>
                <input type="date" class="from-control" name="expiracion" value="{{ (isset($producto))?$producto->expiracion:old('expiracion') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <lavel for="">Stock</lavel>
                <input type="number" class="from-control" name="stock" value="{{ (isset($producto))?$producto->stock:old('stock') }}" required>
        </div>
    </div>

</div>