<!DOCTYPE html>
<html lang="pt-br">
<?php 
    include '../bd/database.php';
    $sql = "select * from usuario";
    $res_consulta = execute_query($sql);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuario</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>

<a href="../usuario.php"><input type="button"  value="Voltar" id="voltar"></a>


<div class="container">
    <h1 class="h1Registros"> Registros de Usuários</h1>
    <table class="tabelaListar">
        <thead>
            <tr>
                <th>Código</th>
                <th>Endereço</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>RG</th>
                <th>Email</th>
                <th>Telefone Celular</th>
                <th>Login</th>
                <th>Senha</th>
                <th>Restrição</th>
                <th>Tipo do Usuário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($res_consulta as $value) : ?>
            <tr> 
                <td> <?php echo $value['codigo']; ?> </td>
                <td> <?php echo $value['endereco'] ?></td>
                <td> <?php echo $value['nome'] ?> </td>
                <td> <?php echo $value['cpf'] ?> </td>
                <td> <?php echo $value['rg'] ?> </td>
                <td> <?php echo $value['email'] ?> </td>
                <td> <?php echo $value['telefone_celular'] ?> </td>
                <td> <?php echo $value['login_usuario'] ?> </td>
                <td> <?php echo $value['senha'] ?> </td>
                <?php 
                    $rest = $value['restricao']; 
                    $restri = wordwrap($rest, 15, "<br />\n");
                ?>
                <td> <?php echo $restri ?> </td>
                <td> <?php echo $value['tipo_usuario'] ?> </td>
                <td id="bot">
                <div class="divBotoes">  
                    <a href="../bd/apagar.php?id=<?php echo $value['codigo'];?>&tipo=usuario"><input type="button"  value="Excluir" id="excluir"></a>
                    <a href="../usuario.php?id=<?php echo $value['codigo']; ?>"><input type="button"  value="Alterar" id="alterar"></a> 
                </div>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div> 
<html>