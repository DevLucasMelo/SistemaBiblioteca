<?php
    include '../bd/database.php';
    $sql = "select * from livro";
    $res_consulta = execute_query($sql);
?> 

<table style="text-align: center;">
    <thead>
        <tr>
            <th>Código</th>
            <th>Editora</th>
            <th>Categoria do Livro</th>
            <th>Título</th>
            <th>Subtítulo</th>
            <th>Idioma</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($res_consulta as $value) : ?>
        <tr> 
            <td> <?php echo $value['codigo']; ?> </td>
            <td> <?php echo $value['editora'] ?></td>
            <td> <?php echo $value['categoria'] ?> </td>
            <td> <?php echo $value['titulo'] ?> </td>
            <td> <?php echo $value['subtitulo'] ?> </td>
            <td> <?php echo $value['idioma'] ?> </td>
            <td> 
                <a href="../bd/apagar.php?id=<?php echo $value['codigo'];?>&tipo=livro">Excluir</a>|
                <a href="../livro.php?id=<?php echo $value['codigo']; ?>">Alterar</a>    
            </td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>
