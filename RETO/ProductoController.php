<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();

        return view('productos.index', compact('productos'));
    }
public function create()
{
    return view('productos.nuevo');
}
    public function store(Request $request)
{
    $request->validate([
    'nombre' => 'required|min:3',
    'precio' => 'required|numeric|min:0',
    'stock' => 'required|integer|min:0'
], [
    'nombre.required' => 'El nombre del producto es obligatorio.',
    'nombre.min' => 'El nombre debe tener al menos 3 caracteres.',

    'precio.required' => 'El precio es obligatorio.',
    'precio.numeric' => 'El precio debe ser un número.',
    'precio.min' => 'El precio no puede ser negativo.',

    'stock.required' => 'Debe ingresar la cantidad disponible.',
    'stock.integer' => 'El stock debe ser un número entero.',
    'stock.min' => 'El stock no puede ser negativo.'
]);

    $producto = new Producto();

    $producto->nombre = $request->nombre;
    $producto->precio = $request->precio;
    $producto->stock = $request->stock;

    $producto->save();

    return redirect('/productos');
}
}