<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    //
    function cadastro_novo(){
        return view('novo_cliente');
    }

    function novo(Request $req){
        $nome = $req->input('nome');
        $telefone = $req->input('telefone');
        $renda = $req->input('renda');

        $cliente = new Cliente();
        $cliente->nome = $nome;
        $cliente->telefone = $telefone;
        $cliente->renda = $renda;

        $cliente->save();

        return redirect()->route('clientes_listar');
    }

    function listar(){
        $clientes = Cliente::all();

        return view('lista_cliente', ['clientes' => $clientes]);
    }
}
