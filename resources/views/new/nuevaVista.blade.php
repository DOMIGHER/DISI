<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo1</title>
</head>
<body>

    {{--$nombreVariable--}}

    <h3>{{$nombreVariable}}</h3>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam alias tempore eius nulla? Doloremque unde, debitis delectus enim praesentium eos voluptatum atque itaque quasi voluptatem fugit assumenda adipisci iure aliquid?
    Officiis at dolor cumque necessitatibus tempore et sapiente autem provident, id, velit, placeat veritatis facere alias saepe quis optio iste qui nobis. Accusantium dolorum perspiciatis ab quae blanditiis quam maxime.</p>

    <a href="{{route('ruta.productos.create') }}">Crear productos</a>

    <a href="{{route('ruta.productos.show') }}">Crear show</a>

    <a href="{{route('ruta.productos.edit') }}">Crear edit</a>

    <a href="{{route('ruta.productos.destroy') }}">Crear destroy</a>

</body>
</html>