<?php
    include '../bd/database.php';
    $sql = "select * from editora";
    $res_consulta = execute_query($sql);
?> 

<table style="text-align: center;">
    <thead>
        <tr>
            <th>Código</th>
            <th>Editora</th>
            <th>Endereço</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($res_consulta as $value) : ?>
        <tr> 
            <td> <?php echo $value['codigo']; ?> </td>
            <td> <?php echo $value['editora'] ?></td>
            <td> <?php echo $value['endereco'] ?> </td>
            <td> 
                <a href="../bd/apagar.php?id=<?php echo $value['codigo'];?>&tipo=editora">Excluir</a>|
                <a href="../editora.php?id=<?php echo $value['codigo']; ?>">Alterar</a>    
            </td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>
