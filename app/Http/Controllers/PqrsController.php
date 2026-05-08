<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PqrsController extends Controller
{
    // Guardar PQRS
    public function store(Request $request)
    {
        return redirect()->back()->with('success', 'Mensaje enviado correctamente');
    }

    // Mostrar mensajes
    public function index()
    {
        return view('mensajes');
    }

    // Editar mensaje
    public function edit($id)
    {
        return view('editar-mensaje', compact('id'));
    }

    // Actualizar mensaje
    public function update(Request $request, $id)
    {
        return redirect()->route('mensajes')
            ->with('success', 'Mensaje actualizado');
    }

    // Eliminar mensaje
    public function destroy($id)
    {
        return redirect()->route('mensajes')
            ->with('success', 'Mensaje eliminado');
    }
}