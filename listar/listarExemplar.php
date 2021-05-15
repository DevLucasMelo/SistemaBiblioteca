<?php
    include '../bd/database.php';
    $sql = "select * from exemplar";
    $res_consulta = execute_query($sql);
?> 

<table style="text-align: center;">
    <thead>
        <tr>
            <th>Código</th>
            <th>Tombo</th>
            <th>Código do livro</th>
            <th>Localização</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($res_consulta as $value) : ?>
        <tr> 
            <td> <?php echo $value['codigo']; ?> </td>
            <td> <?php echo $value['tombo'] ?></td>
            <td> <?php echo $value['codigo_livro'] ?> </td>
            <td> <?php echo $value['localizacao'] ?> </td>
            <td> <?php echo $value['status_livro'] ?> </td>
            <td> 
                <a href="../bd/apagar.php?id=<?php echo $value['codigo'];?>&tipo=exemplar">Excluir</a>|
                <a href="../exemplar.php?id=<?php echo $value['codigo']; ?>">Alterar</a>    
            </td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>
