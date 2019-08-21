
@extends('principal')

@section('conteudo')
<h1>Detalhes do Produto: <?= $p->nome ?></h1>            

<ul>
    <li>
        <b>Valor:</b> R$ <?= $p->valor ?>   
    </li>
    <li>
        <b>Descricao:</b> <?= $p->descricao ?>
    </li>
    <li>
        <b>Quantidade estoque:</b> <?= $p->quantidade ?>
    </li>
</ul>   
@stop
   
