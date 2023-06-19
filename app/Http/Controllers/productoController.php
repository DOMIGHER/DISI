<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductoModel;


class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$productos = ProductoModel::selec('*')->orderBy('idProducto','ASC');

    $productos = ProductoModel::get();
    return view('productos.index', compact('productos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Tomar la vista

    return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Crear la vista
        $producto = new ProductoModel();
        $producto = $this->createUpdateProducto($request, $producto);
        return redirect()->route('productos.index');
        //->whith('message','Registro creado,');
        
    }

    public function createUpdateProducto(Request $request, $producto){
        $producto->nombre=$request->nombre;
        $producto->descripcion=$request->descripcion;
        $producto->precio=$request->precio;
        $producto->expiracion=$request->expiracion;
        $producto->stock=$request->stock;
        $producto->save();
        return $producto;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $producto = ProductoModel::where('idProducto',$id)->firstOrFail();
        return redirect()->route('productos.index');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Toma la vista
        $producto = ProductoModel::where('idProducto',$id)->firstOrFail();
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Actualiza la vista
        $producto = ProductoModel::where('idProducto',$id)->firstOrFail();
        $producto = $this->createUpdateProducto($request, $producto);
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = ProductoModel::where('idProducto',$id)->firstOrFail($id);
        try{$producto->delete();
            return redirect()->route('productos.index')
            ->with('message', 'Registro eliminado.');
        }catch(QueryExeption $e){
            return redirect()->route('productos.index')
            ->with('danger', 'Registro relacionado imposible eliminar.');
        }
    }
}
