<?php
    include '../bd/database.php';
    $sql = "select * from autor";
    $res_consulta = execute_query($sql);
?> 

<table style="text-align: center;">
    <thead>
        <tr>
            <th>Código</th>
            <th>Autor</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($res_consulta as $value) : ?>
        <tr> 
            <td> <?php echo $value['codigo']; ?> </td>
            <td> <?php echo $value['autor'] ?></td>
            <td> 
                <a href="../bd/apagar.php?id=<?php echo $value['codigo'];?>&tipo=autor">Excluir</a>|
                <a href="../autor.php?id=<?php echo $value['codigo']; ?>">Alterar</a>    
            </td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>
