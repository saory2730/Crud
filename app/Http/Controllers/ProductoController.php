<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');  
    }

    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'material' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'talla' => 'nullable|string|max:50',
            'precio' => 'required|numeric',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $producto = new Producto($request->except('imagen'));

        if ($request->hasFile('imagen')) {
            $nombreImagen = time() . '_' . $request->imagen->getClientOriginalName();
            $ruta = $request->imagen->storeAs('imagenes', $nombreImagen, 'public');
            $producto->imagen = $ruta;
        }

        $producto->save();

        return redirect()->route('productos.index')->with('success', 'Producto creado con éxito');
    }

    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'material' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'talla' => 'nullable|string|max:50',
            'precio' => 'required|numeric',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $producto->fill($request->except('imagen'));

        if ($request->hasFile('imagen')) {
            // Borra imagen anterior si existe
            if ($producto->imagen && Storage::disk('public')->exists($producto->imagen)) {
                Storage::disk('public')->delete($producto->imagen);
            }

            $nombreImagen = time() . '_' . $request->imagen->getClientOriginalName();
            $ruta = $request->imagen->storeAs('imagenes', $nombreImagen, 'public');
            $producto->imagen = $ruta;
        }

        $producto->save();

        return redirect()->route('productos.index')->with('success', 'Producto actualizado con éxito');
    }

    public function destroy(Producto $producto)
    {
        if ($producto->imagen && Storage::disk('public')->exists($producto->imagen)) {
            Storage::disk('public')->delete($producto->imagen);
        }

        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado');
    }
}
