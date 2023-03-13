<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();

        return view('produto.index')->with('produtos',$produtos);
    }

    public function show(Produto $produto){
        // Isso mostra na tela o valor da variavel e para. DD
        // dd($produto);
        return view('produto.show')->with('produto',$produto);
    }
}
