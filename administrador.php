<!DOCTYPE html>
<html lang="pt-br">
<?php
    include 'bd/database.php';
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    $codigo ="";
    $usuario = "";
        
    if($id != NULL){        //lógica para alterar valores no BD, se id for diferente de nulo, significa alteração
        $sql="select * from administrador where codigo = ". $id;
        $res_consulta = execute_query($sql);
        
        foreach ($res_consulta as $value):
            $codigo = $value['codigo']; // "codigo" nome da coluna no BD
            $usuario = $value['usuario'];
        endforeach;  
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="style.css">
</head>
    <script lang="javascript" src="script.js"></script>
<body>
    <nav id="menu">
        <ul>
            <li><a href="index.php" target="_self">Início</a></li>
            <li><a href="usuario.php" target="_self">Usuário</a></li>
            <li><a href="endereco.php" target="_self">Endereço</a></li>
            <li><a href="administrador.php" target="_self">Administrador</a></li>
            <li><a href="emprestimo.php">Empréstimo ou Devolução</a></li>
            <li><a href="editora.php" target="_self">Editora</a></li>
            <li><a href="exemplar.php" target="_self">Exemplar</a></li>
            <li><a href="autorLivro.php" target="_self">Autor do Livro</a></li>
            <li><a href="livro.php" target="_self">Livro</a></li>
            <li><a href="autor.php" target="_self">Autor</a></li>
            <li><a href="categoria.php" target="_self">Categoria do Livro</a></li>
        </ul>
    </nav>
    <h1>Cadastro do Administrador</h1>
    <form method="post" action="processar.php" onsubmit="return validarAdministrador()">
        <table class="tabela2campos">
           <tr>
               <td>Código<input type="text" disabled placeholder="Não preencher" name="codigo" value="<?php echo $codigo;?>" id="codigo" class="campo"></td>
               <td>Usuário<span class="obrigatorio">*</span><input type="text" placeholder="Usuário cadastrado" name="usuario" value="<?php echo $usuario; ?>" id="usuario" class="campo"></td>
               <td>
               <a href="administrador.php"><input type="button"  value="Limpar" id="limpar"></a>
               </td>
               <!-- Identificador do usuário -->
               <td>
               <input type="hidden" name="id" value="<?php echo $id?>">
               <!-- Identificador da pagina -->
               <input type="hidden" name="tipo" value="administrador"/>
               <input type="submit" value="Enviar" id="enviar">
               </td>
               </td>
               <td>
               <a href="listar/listarAdministrador.php"><input type="button"  value="Consultar" id="consultar"></a>
               </td>
            </tr>
        </table>
    </form>
</body>
</html>
    