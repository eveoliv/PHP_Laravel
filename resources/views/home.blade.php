@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Você esta logado!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif 

                    <a href="/produtos" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Produtos</a>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
