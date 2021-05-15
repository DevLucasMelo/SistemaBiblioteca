<!DOCTYPE html>
<html lang="pt-br">
<?php
    include 'bd/database.php';
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    $exemplar ="";
    $usuario = "";
    $dt_emprestimo = "";
    $dt_devolucao = "";
    $dt_efetiva = "";
    $estadoLivro = "";
        
    if($id != NULL){        //lógica para alterar valores no BD, se id for diferente de nulo, significa alteração
        $sql="select * from emprestimo where codigo = ". $id;
        $res_consulta = execute_query($sql);
        
        foreach ($res_consulta as $value):
            $codigo = $value['codigo']; // "codigo" nome da coluna no BD
            $exemplar = $value['exemplar'];
            $usuario = $value['usuario'];
            $dt_emprestimo = $value['dt_emprestimo'];
            $dt_devolucao = $value['dt_devolucao'];
            $dt_efetiva = $value['dt_efetiva'];
            $estadoLivro = $value['estado_livro'];
        endforeach;  
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimo ou Devolução</title>
    <link rel="stylesheet" href="style.css">
</head>
<script lang='javascript' src='script.js'></script>
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
    <h1>Cadastro do Empréstimo ou Devolução</h1>
    <form method="POST" action="processar.php" onsubmit="return validarEmprestimo()">
        <table class="tabela">
            <tr>
                <td>Código<input type="text" disabled placeholder="Não preencher" name="codigo" value="<?php echo $codigo;?>" id="codigo" class="campo"></td>
                <td>Exemplar<span class="obrigatorio">*</span><input type="text"name="exemplar" value="<?php echo $exemplar;?>" id="exemplar" placeholder="Título do livro" class="campo"></td>
                <td>Usuário<span class="obrigatorio">*</span><input type="text" name="usuario" value="<?php echo $usuario;?>" id="usuario" placeholder="Usuário cadastrado" class="campo"></td>
                <td>Data de empréstimo<span class="obrigatorio">*</span><input type="date" name="emprestimo" value="<?php echo $dt_emprestimo;?>" id="emprestimo" class="campo"></td>
            </tr>
            <tr>
                <td>Data de devolução<span class="obrigatorio">*</span><input type="date" name="devolucao" value="<?php echo $dt_devolucao;?>" id="devolucao" class="campo"></td>
                <td>Data de devolução efetiva<span class="obrigatorio">*</span><input type="date" name="efetiva" value="<?php echo $dt_efetiva;?>" id="efetiva" class="campo"></td>
                <td>Estado do livro<span class="obrigatorio">*</span>
                <select name='estadoLivro' value="<?php echo $estadoLivro;?>" id="estadoLivro" class="campo">
                    <option id='naoEscolhido'>Selecione uma opção</option>
                    <option>Perfeito</option>
                    <option>Ótimo</option>
                    <option>Bom</option>
                    <option>Ruim</option>
                    <option>Péssimo</option>
                </select>
                </td>
                <td>
                    <a href="emprestimo.php"><input type="button"  value="Limpar" id="limpar"></a>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="hidden" name="tipo" value="emprestimo"/>
                    <input type="submit" value="Enviar" id="enviar"></td>
                </td>
                <td>
               <a href="listar/listarUsuario.php"><input type="button"  value="Consultar" id="consultar"></a>
               </td>
            </tr>
        </table>
    </form>
</body>
</html>
    