<?php
    include '../bd/database.php';
    $sql = "select * from emprestimo";
    $res_consulta = execute_query($sql);
?> 

<table style="text-align: center;">
    <thead>
        <tr>
            <th>Código</th>
            <th>Exemplar</th>
            <th>Usuário</th>
            <th>Data de empréstimo</th>
            <th>Data de devolução</th>
            <th>Data de devolução efetiva</th>
            <th>Estado do livro</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($res_consulta as $value) : ?>
        <tr> 
            <td> <?php echo $value['codigo']; ?> </td>
            <td> <?php echo $value['exemplar'] ?></td>
            <td> <?php echo $value['usuario'] ?> </td>
            <td> <?php echo $value['dt_emprestimo'] ?> </td>
            <td> <?php echo $value['dt_devolucao'] ?> </td>
            <td> <?php echo $value['dt_efetiva'] ?> </td>
            <td> <?php echo $value['estado_livro'] ?> </td>
            <td> 
                <a href="../bd/apagar.php?id=<?php echo $value['codigo'];?>&tipo=emprestimo">Excluir</a>|
                <a href="../emprestimo.php?id=<?php echo $value['codigo']; ?>">Alterar</a>    
            </td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>
