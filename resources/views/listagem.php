<html>
    <body>
    <h1>Listagem de Produtos</h1>    
        <table>
            <?php foreach ($prosutos as $p ): ?> 
                <tr>
                <td><?= $p->nome ?></td>
                <td><?= $p->valor ?></td>
                <td><?= $p->quantidade ?></td>
                <td><?= $p->descricao ?></td>
                </tr>        
            <?php endforeach ?>    
        </table>
    </body>
</html>