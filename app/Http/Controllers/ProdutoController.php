<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Http\Requests\ProdutosRequest;
use estoque\Produto;
use Request;

class ProdutoController extends Controller
{
    public function lista()
    { //$produtos = DB::select('select * from produtos');               
        $produtos = Produto::all();
        
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra(int $id)
    {//$resposta = DB::select('select * from produtos where id = ?', [$id]);
        $produto = Produto::find($id);
        
        if (empty($produto)) {
            return "Esse produto não existe";
        }
        
        return view('produto.detalhes')->with('p', $produto);
    }

    public function novo()
    {
        return view('produto.formulario');
    }

    public function adiciona(ProdutosRequest $request)
    {           
        Produto::create($request::all());
                
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));   
    }

    public function editar(int $id)
    {
        $produto = Produto::find($id);
        
        return view('produto.alterar')->with('p', $produto);      
    }

    public function alterar(int $id)
    {
        $params = Request::all();
        $produto = Produto::find($id);
        $produto->update($params);

        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome')); 
    }         

    public function remove(int $id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()->action('ProdutoController@lista');
    }

    public function listaJson()
    {//$produtos = DB::select('select * from produtos');
        $produtos = Produto::all();
        
        return response()->json($produtos);
    }
}
