<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view("players");
        }
    public function inicio(){
        return view("welcome");
        }

    public function store(Request $request)
    { //Metodo guardar jugador
        $this->validate(request(), [
            "nombre" => "required",
            "posicion" => "required|min:2",
            "nacionalidad" => "required"
        ]);
        Jugador::create(request()->all());
        return redirect(route("show"));
       
    }

    public function show()
    { //Metodo muestra jugadores
        $jugadores = Jugador::all();
        return view('show')->with('jugadores', $jugadores);
    }

    public function destroy($id)
    {
        if (request()->isMethod("DELETE")) {
            try {
                $jugador = Jugador::findOrFail($id);
                $jugador->delete();
                return redirect(route("show"));
            } catch (Exception $ex) {
                dd($ex);
            }
        }
    }
}
