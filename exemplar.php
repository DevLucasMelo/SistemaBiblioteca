<!DOCTYPE html>
<html lang="pt-br">
<?php
    include 'bd/database.php';
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    $tombo ="";
    $codigo_livro = "";
    $localizacao = "";
    $status_livro = "";
        
    if($id != NULL){        //lógica para alterar valores no BD, se id for diferente de nulo, significa alteração
        $sql="select * from exemplar where codigo = ". $id;
        $res_consulta = execute_query($sql);
        
        foreach ($res_consulta as $value):
            $codigo = $value['codigo']; // "codigo" nome da coluna no BD
            $tombo = $value['tombo'];
            $codigo_livro = $value['codigo_livro'];
            $localizacao = $value['localizacao'];
            $status_livro = $value['status_livro'];
        endforeach;  
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Exemplar</title>
    <link rel="stylesheet" href="style.css">
    <script lang="javascript" src="script.js"></script>
</head>
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
    <h1>Cadastro do Exemplar</h1>
    <form method="post" action="processar.php" onsubmit="return validarExemplar()">
        <table class="tabela3campos">
            <tr>
                <td>Código<input type="text" disabled placeholder="Não preencher" name="codigo" value="<?php echo $codigo;?>" class="campo"></td>
                <td>Tombo<span class="obrigatorio">*</span><input type="text"name="tombo" value="<?php echo $tombo;?>" id="tombo" placeholder="Número do Cadastro" class="campo"></td>
                <td>Código do livro<span class="obrigatorio">*</span><input type="text" name="codigoLivro" value="<?php echo $codigo_livro;?>" id="codigoLivro" placeholder="Código do livro" class="campo"></td>
            </tr>
            <tr>
                <td>Localização<span class="obrigatorio">*</span><input type="text" name="localizacao" value="<?php echo $localizacao;?>" id="localizacao" class="campo" placeholder="Locacalizaçõa do exemplar"></td>
                <td>Status<span class="obrigatorio">*</span>
                    <select name='status' value="<?php echo $status_livro;?>" id="status" class='campo'>
                        <option  id='naoEscolhido'>Selecione uma opção</option>
                        <option value="Disponível">Disponível</option>
                        <option value="Não disponível">Não disponível</option>
                    </select>    
                </td>
                <td>
                <a href="exemplar.php"><input type="button"  value="Limpar" id="limpar"></a>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="hidden" name="tipo" value="exemplar"/>
                <input type="submit" value="Enviar" id="enviar"></td>
                </td>
                <td>
               <a href="listar/listarUsuario.php"><input type="button"  value="Consultar" id="consultar2"></a>
               </td>
            </tr>
        </table>
    </form>
</body>
</html>
    