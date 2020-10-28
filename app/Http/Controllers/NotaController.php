<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;

class NotaController extends Controller
{
	// vistas
    public function inicio()
    {
    	$notas = Nota::all();
    	return view('notas.index', compact('notas'));
    }

    public function crear()
    {
    	return view('notas.create');
    }

    public function editar($id)
    {
    	$nota = Nota::find($id);
    	return view('notas.edit', compact('nota'));
    }

    // actions insert, update, delete

    public function add(Request $request)
    {
    	$this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

    	$nota = new Nota();
    	$nota->name = $request->nombre;
    	$nota->description = $request->description;
    	$nota->save();

    	return redirect()->route('home');
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string',
        ]);
        
    	$nota = Nota::find($id);
    	$nota->name = $request->nombre;
    	$nota->description = $request->description;
    	$nota->save();

    	return redirect()->route('home');
    }

    public function borrar($id)
    {
    	$nota = Nota::find($id);
    	$nota->delete();

    	return redirect()->route('home');
    }

}
