<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
       
        return view('produtos.index', ['produtos' => $produtos]);

    }
    public function create()
    {
        return view('produtos.create');
    }
    public function store(Request $request)
    {
        produto::create([
        'nome' => $request->nome,
        'custo' => $request->custo,
        'preco' => $request->preco,
        'quantidade' => $request->quantidade,
        'fornecedor' => $request->fornecedor,
        'marca' => $request->marca,
        'datadevencimento' => $request->datadevencimento
        ]);
        return "Produto criado com sucesso";
    }
}
