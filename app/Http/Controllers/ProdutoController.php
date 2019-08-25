<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Http\Requests\ProdutosRequest;
use estoque\Produto;
use Request;

class ProdutoController extends Controller
{
    public function lista()
    {              
        //$produtos = DB::select('select * from produtos');               
        $produtos = Produto::all();

        return view('produto.listagem')
        ->with('produtos', $produtos);
    }

    public function mostra(int $id)
    {        
        //$resposta = DB::select('select * from produtos where id = ?', [$id]);
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

    public function adiciona(int $id)
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

        if(empty($id)){

            Produto::create(Request::all());
        }else{
            
            Produto::update(Request::all());
        }
        
        return redirect()
        ->action('ProdutoController@lista')
        ->withInput(Request::only('nome'));   
    }

    public  function altera(int $id)
    {
        $produto = Produto::find($id);
        
        return view('produto.formulario')->with('p', $produto);      
    }

    public function remove(int $id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()
        ->action('ProdutoController@lista');
    }

    public function listaJson()
    {
        //$produtos = DB::select('select * from produtos');
        $produtos = Produto::all();
        return response()
        ->json($produtos);
    }
}
