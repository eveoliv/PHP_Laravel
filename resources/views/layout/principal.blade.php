<html>
<head> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="/css/custom.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Controle de Estoque - Modelo</title>
</head>
<body>
    <div class="container mt-5">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/produtos">
                Estoque Laravel - Modelo
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{action('ProdutoController@lista')}}">
                    Listagem
                </a>
            </li>
            <li>
                <a href="{{action('ProdutoController@novo')}}">
                    Novo
                </a>
            </li>
            <li>
                <a href="{{action('ProdutoController@listaJson')}}">
                    ListaJson
                </a>
            </li>
            <li>
                <a href="/sair" class="text-danger">
                    Sair
                </a>
            </li>
            </ul>
        </div>
    </nav>
        @yield('conteudo')

        <footer class="footer">
            <p>© Everton Oliveira - Controlde de estoque modelo, PHP, Lavavel, MysQl.</p>
        </footer>
    </div>
</body>
</html>
