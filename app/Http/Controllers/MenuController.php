<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    // Vista Pública
    public function index() {
        $productos = DB::table('productos')->get();
        return view('menu.index', compact('productos'));
    }

    // Listado Administrativo
    public function admin() {
        $productos = DB::table('productos')->get();
        return view('admin.index', compact('productos'));
    }

    public function store(Request $request) {
        DB::table('productos')->insert([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'categoria' => $request->categoria,
            'imagen' => $request->imagen,
            'created_at' => now()
        ]);
        return redirect()->back()->with('success', 'Producto añadido');
    }

    public function delete($id) {
        DB::table('productos')->where('id', $id)->delete();
        return redirect()->back();
    }
}
