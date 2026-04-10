<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pqrs;
use App\Models\Zapato;

class PaginaController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function formales()
    {
        return view('formales');
    }

    public function deportivos()
    {
        return view('deportivos');
    }

    public function accis()
    {
        return view('accis');
    }

    public function nosotros()
    {
        return view('nosotros');
    }

    public function contactos()
    {
        return view('contactos');
    }

    public function guardarPqrs(Request $request)
    {
        $request->validate([
            'nombre'   => 'required|max:255',
            'apellido' => 'required|max:255',
            'correo'   => 'required|email',
            'tipo'     => 'required',
            'mensaje'  => 'required|min:5'
        ]);

        Pqrs::create([
            'nombre'   => $request->nombre,
            'apellido' => $request->apellido,
            'correo'   => $request->correo,
            'tipo'     => $request->tipo,
            'mensaje'  => $request->mensaje
        ]);

        return back()->with('success', 'Mensaje enviado correctamente.');
    }

    public function zapatos()
    {
        $zapatos = Zapato::latest()->get();
        return view('zapatos', compact('zapatos'));
    }

    public function guardarZapato(Request $request)
    {
        $request->validate([
            'nombre'      => 'required|max:100',
            'marca'       => 'required|max:100',
            'talla'       => 'required|integer',
            'color'       => 'required|max:50',
            'precio'      => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'descripcion' => 'required',
        ]);

        Zapato::create($request->only([
            'nombre', 'marca', 'talla', 'color', 'precio', 'stock', 'descripcion'
        ]));

        return back()->with('success', '¡Zapato registrado exitosamente :)!');
    }
}
