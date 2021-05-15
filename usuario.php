<!DOCTYPE html>
<html lang="pt-br">
<?php
    include 'bd/database.php';
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    $codigo ="";
    $endereco = "";
    $nome = "";
    $cpf = "";
    $rg = "";
    $email = "";
    $telefone = "";
    $login = "";
    $senha = "";
    $restricao = "";
    $tipoUsuario = "";

    if($id != NULL){        //lógica para alterar valores no BD, se id for diferente de nulo, significa alteração
        $sql="select * from usuario where codigo = ". $id;
        $res_consulta = execute_query($sql);
        
        foreach ($res_consulta as $value):
            $codigo = $value['codigo']; // "codigo" nome da coluna no BD
            $endereco = $value['endereco'];
            $nome = $value['nome'];
            $cpf = $value['cpf'];
            $rg = $value['rg'];
            $email = $value['email'];
            $telefone = $value['telefone_celular'];
            $login = $value['login_usuario'];
            $senha = $value['senha'];
            $restricao = $value['restricao'];
            $tipoUsuario = $value['tipo_usuario'];
        endforeach;  
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<script lang="javascript" src="script.js"></script>
<body style="margin-top: 180px;">
    <nav id="menu">
        <ul>
            <li><a href="index.php" target="_self"><span style="font-size: 16px">Início</span></a></li>
            <li><a href="usuario.php" target="_self"><span style="font-size: 16px">Usuário</span></a></li>
            <li><a href="endereco.php" target="_self"><span style="font-size: 16px">Endereço</span></a></li>
            <li><a href="administrador.php" target="_self"><span style="font-size: 16px">Administrador</span></a></li>
            <li><a href="emprestimo.php"><span style="font-size: 16px">Empréstimo ou Devolução</span></a></li>
            <li><a href="editora.php" target="_self"><span style="font-size: 16px">Editora</span></a></li>
            <li><a href="exemplar.php" target="_self"><span style="font-size: 16px">Exemplar</span></a></li>
            <li><a href="autorLivro.php" target="_self"><span style="font-size: 16px">Autor do Livro</span></a></li>
            <li><a href="livro.php" target="_self"><span style="font-size: 16px">Livro</span></a></li>
            <li><a href="autor.php" target="_self"><span style="font-size: 16px">Autor</span></a></li>
            <li><a href="categoria.php" target="_self"><span style="font-size: 16px">Categoria do Livro</span></a></li>
        </ul>
    </nav>  
    <h1>Cadastro do Usuário</h1>
    <form method="POST" action="processar.php" onsubmit="return validarUsuario()">
        <table class="tabela">
           <tr>
               <td>Código<input type="text" disabled placeholder="Não preencher" name="codigo" value="<?php echo $codigo;?>" id="codigo" class="campo"></td>
               <td>Endereço<span class="obrigatorio">*</span><input type="text"name="endereco" value="<?php echo $endereco;?>" id="endereco" placeholder="Endereço completo" class="campo"></td>
               <td>Nome<span class="obrigatorio">*</span><input type="text" name="nome" value='<?php echo $nome;?>' id="nome" placeholder="Nome completo" class="campo"></td>
               <td>CPF<span class="obrigatorio">*</span><input type="text" name="cpf" value="<?php echo $cpf;?>" id="cpf" placeholder="xxx.xxx.xxx-xx" class="campo"></td>
           </tr>
           <tr>
               <td>RG<span class="obrigatorio">*</span><input type="text" name="rg" value="<?php echo $rg;?>" id="rg" placeholder="xx.xxx.xxx-x" class="campo"></td>
               <td>Email<span class="obrigatorio">*</span><input type="text" name="email" value="<?php echo $email;?>" id="email" placeholder="usuario@servidor.com" class="campo"></td>
               <td>Telefone Celular<span class="obrigatorio">*</span><input type="text" name="telefone" value="<?php echo $telefone;?>" id="telefone" placeholder="(DDD)xxxx-xxxx" class="campo"></td>
               <td>Login<span class="obrigatorio">*</span><input type="text" name="login" value="<?php echo $login;?>" id="login" placeholder="Login" class="campo"></td>
           </tr>
           <tr>
                <td>Senha<span class="obrigatorio">*</span><input type="password" name="senha" value="<?php echo $senha;?>" id="senha" placeholder="senha" maxlength="20" class="campo"></td>
                <td>Restrição<span class="obrigatorio">*</span><input type="text" name="restricao" value="<?php echo $restricao;?>" id="restricao" placeholder="restrição" class="campo"></td>
                <td>Tipo de Usuário<span class="obrigatorio">*</span>
                <select name="tipoUsuario" value="<?php echo $tipoUsuario;?>" id="tipoUsuario" class="campo">
                    <option id="naoEscolhido">Selecione uma opção</option>
                    <option value="usuario">Usuário</option>
                    <option value="autor">Autor</option>
                    <option value="administrador">Administrador</option>
                </select>
                </td>
               <td>
               <a href="usuario.php"><input type="button"  value="Limpar" id="limpar"></a>
               <input type="hidden" name="id" value="<?php echo $id ?>">
               <input type="hidden" name="tipo" value="usuario">
               <input type="submit" value="Enviar" id="enviar"></td>
               <td>
               <a href="listar/listarUsuario.php"><input type="button"  value="Consultar" id="consultar2"></a>
               </td>
            </tr>
        </table>
    </form>
</body>
<html>
    