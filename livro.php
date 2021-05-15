<!DOCTYPE html>
<html lang="pt-br">
<?php
    include 'bd/database.php';
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    $editora ="";
    $categoria = "";
    $titulo = "";
    $subtitulo = "";
    $idioma = "";
        
    if($id != NULL){        //lógica para alterar valores no BD, se id for diferente de nulo, significa alteração
        $sql="select * from livro where codigo = ". $id;
        $res_consulta = execute_query($sql);
        
        foreach ($res_consulta as $value):
            $codigo = $value['codigo']; // "codigo" nome da coluna no BD
            $editora = $value['editora'];
            $categoria = $value['categoria'];
            $titulo = $value['titulo'];
            $subtitulo = $value['subtitulo'];
            $idioma = $value['idioma'];
        endforeach;  
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro</title>
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
    <h1>Cadastro do Livro</h1>
    <form method="post" action="processar.php" onsubmit="return validarLivro()">
        <table class="tabela3campos">
            <tr>
                <td>Código<input type="text" disabled placeholder="Não preencher" name="codigo" value="<?php echo $codigo;?>" class="campo"></td>
                <td>Editora<span class="obrigatorio">*</span><input type="text" name="editora" value="<?php echo $editora;?>" id="editora" placeholder="Nome da Editora" class="campo"></td>
                <td>Categoria do Livro<span class="obrigatorio">*</span>
                <select name='categoria' value="<?php echo $categoria;?>" id="categoria" class="campo">
                    <option id="naoEscolhe">Selecione uma opção</option>
                    <option value="Ação">Ação</option>
                    <option value="Aventura">Aventura</option>
                    <option value="Comédia">Comédia</option>
                    <option value="Romance">Romance</option>
                    <option value="Suspense">Suspense</option>
                    <option value="Terror">Terror</option>
                
                </td>
            </tr>
            <tr>
                <td>Título<span class="obrigatorio">*</span><input type="text" name="titulo" value="<?php echo $titulo;?>" id="titulo" placeholder="Título do Livro" class="campo"></td>
                <td>Subtítulo<span class="obrigatorio">*</span><input type="text" name="subtitulo" value="<?php echo $subtitulo;?>" id="subtitulo" class="campo" placeholder="Subtítulo do Livro"></td>
                <td>Idioma<span class="obrigatorio">*</span>
                <select name='idioma' value="<?php echo $idioma;?>" id="idioma" class="campo">
                    <option id='naoEscolhido'>Selecione uma opção</option>
                    <option value="Português">Português</option>
                    <option value="Inglês">Inglês</option>
                    <option value="Francês">Francês</option>
                    <option value="Alemão">Alemão</option>
                    <option value="Espanhol">Espanhol</option>
                </select>
                </td>
            </tr>
        </table>
        <a href="livro.php"><input type="button"  value="Limpar" id="limparLivro"></a>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="hidden" name="tipo" value="livro"/>
        <input type="submit" value="Enviar" id="enviarLivro">
        <td>
        <a href="listar/listarUsuario.php"><input type="button"  value="Consultar" id="consultar"></a>
        </td>
    </form>
</body>
</html>
    