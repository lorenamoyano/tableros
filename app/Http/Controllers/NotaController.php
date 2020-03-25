<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

namespace App\Http\Controllers;
use App\Models\Tablero;
//use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    
    public function view(Request $req)
    {
        $idTab = $req->input('id'); //pedimos el id
        $notas = Tablero::find($idTab)->notas()->get(); //buscamos por la clave primaria y obtenemos las notas del tablero con ese id

    	return view('notas.ver' , ['notas' => $notas]) ; //devolvemos la vista con las notas
    }
}
