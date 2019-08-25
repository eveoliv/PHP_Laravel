@extends('layout.principal')

@section('conteudo')

<h1>Novo Produto</h1>

<form action="/produtos/adiciona" method="post"> 

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>

    <div class="form-group">
        <label>Nome</label>
        <input name="nome" class="form-control" value="{{ $p->id >=1  ? $p->nome : ' ' }} ">                                                                
    </div>
    
    <div class="form-group">
        <label>Descricao</label>
        <input name="descricao" class="form-control" value="{{ $p->id > 0 ? $p->descricao : ' ' }}">
    </div>
    
    <div class="form-group">
        <label>Valor</label>
        <input name="valor" class="form-control" value="{{ $p->id > 0 ? $p->valor : ' ' }}">
    </div>
    
    <div class="form-group">
        <label>Quantidade</label>
        <input name="quantidade" type="number" class="form-control" value="{{ $p->id > 0 ? $p->quantidade : ' ' }}"/>
    </div>

    <button type="submit" class="btn btn-primary btn-block">
    Adicionar
    </button>
</form>

@stop