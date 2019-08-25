<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController extends Controller
{
    public function lista()
    {              
        //$produtos = DB::select('select * from produtos');               
        $produtos = Produto::all();

        return view('produtos/listagem')->withProdutos($produtos);
    }

    public function mostra(int $id)
    {        
        //$resposta = DB::select('select * from produtos where id = ?', [$id]);
        $produto = Produto::find($id);

        if (empty($produto)) {
            return "Esse produto não existe";
        }
        return view('produtos/detalhes')->with('p', $produto);
    }

    public function novo()
    {
        return view('produtos/formulario');
    }

    public function adiciona()
    {   
        /* metodo 1
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
        return redirect('/produtos')->withInput(Request::only('nome'));
        */
        
        /*metodo 2
        $params = Request::all();
        $produto = new Produto($params);                    
        $produto->save();
        
        return redirect()
        ->action('ProdutoController@lista')
        ->withInput(Request::only('nome'));   
        */
        
        /*metodo 3 */
        Produto::create(Request::all());
        
        return redirect()
        ->action('ProdutoController@lista')
        ->withInput(Request::only('nome'));   
    }

    public function listaJson()
    {
        //$produtos = DB::select('select * from produtos');
        $produtos = Produto::all();
        return response()
        ->json($produtos);
    }
}
