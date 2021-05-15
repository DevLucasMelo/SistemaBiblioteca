<?php
    include '../bd/database.php';
    $sql="select * from administrador ";
    $res_consulta = execute_query($sql);
?>
    <div class="listar"> 
    <table style="font-size: 20px; text-align: center;" >
        <thead>
            <tr>
                <th>Código</th>
                <th>Usuário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($res_consulta as $value) : ?>
            <tr style="font-size: 18px;">
                <td><?php echo $value['codigo']; ?></td>
                <td><?php echo $value['usuario']; ?></td>
                <td style="width:220px;">
                    <a href="../bd/apagar.php?id=<?php echo $value['codigo'];?>&tipo=administrador">Excluir</a>| 
                    <a href="../administrador.php?id=<?php echo $value['codigo']; ?>">Alterar</a>                
                </td>
            </tr>
            <?php  endforeach;?>
        </tbody>
    </table>
    </div>