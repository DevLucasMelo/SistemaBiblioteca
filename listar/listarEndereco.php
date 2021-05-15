<?php
    include '../bd/database.php';
    $sql = "select * from endereco";
    $res_consulta = execute_query($sql);
?> 

<table style="text-align: center;">
    <thead>
        <tr>
            <th>Código</th>
            <th>CEP</th>
            <th>Rua</th>
            <th>Número</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($res_consulta as $value) : ?>
        <tr> 
            <td> <?php echo $value['codigo']; ?> </td>
            <td> <?php echo $value['cep'] ?></td>
            <td> <?php echo $value['Rua'] ?> </td>
            <td> <?php echo $value['numero'] ?> </td>
            <td> <?php echo $value['bairro'] ?> </td>
            <td> <?php echo $value['cidade'] ?> </td>
            <td> <?php echo $value['estado'] ?> </td>
            <td>
                <a href="../bd/apagar.php?id=<?php echo $value['codigo'];?>&tipo=endereco">Excluir</a>|
                <a href="../endereco.php?id=<?php echo $value['codigo']; ?>">Alterar</a>    
            </td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>
