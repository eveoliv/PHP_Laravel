
<html>
<head> 
    <link href="/css/app.css" rel="stylesheet">
    <title>Controle de Estoque</title>
</head>
    <body>
        <div class="container mt-5">
        <h1>Detalhes do Produto: <?= $p->nome ?></h1>            
            <table class="table table-striped table-bordered table-hover">
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
            </table>
        </div>
    </body>
</html>