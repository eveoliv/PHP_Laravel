<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController extends Controller
{
    public function lista()
    {              
        $produtos = DB::select('select * from produtos');               
        
        return view('produtos/listagem')->withProdutos($produtos);
    }

    public function mostra(int $id)
    {        
        $resposta = DB::select('select * from produtos where id = ?', [$id]);

        if (empty($resposta)) {
            return "Esse produto não existe";
        }
        return view('produtos/detalhes')->with('p', $resposta[0]);
    }

    public function novo()
    {
        return view('produtos/formulario');
    }

    public function adiciona()
    {
        $nome = Request::input('nome');
        $valor = Request::input('valor');
        $descricao = Request::input('descricao');
        $quantidade = Request::input('quantidade');
        
        DB::table('produtos')->insert(
            ['nome' => $nome,
            'valor' => $valor,
            'descricao' => $descricao,
            'quantidade' => $quantidade
            ]);

        return view('produtos/adicionado')->with('nome', $nome);
    }
}
