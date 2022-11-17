<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request){
        /*
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');

        $contato->save();
        */
        // Nesse modo de salvar dados, é necessario a configuração do fillable no model
        $contato = new SiteContato();
        $contato->fill($request->all());
        $contato->save();


       return view('site.contato');

    }
}
