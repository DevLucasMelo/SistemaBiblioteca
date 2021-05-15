<!DOCTYPE html>
<html lang="pt-br">
<?php
    include 'bd/database.php';
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    $codigo ="";
    $cep = "";
    $rua = "";
    $numero = "";
    $bairro = "";
    $cidade = "";
    $estado = "";
        
    if($id != NULL){        //lógica para alterar valores no BD, se id for diferente de nulo, significa alteração
        $sql="select * from endereco where codigo = ". $id;
        $res_consulta = execute_query($sql);
        
        foreach ($res_consulta as $value):
            $codigo = $value['codigo']; // "codigo" nome da coluna no BD
            $cep = $value['cep'];
            $rua = $value['Rua'];
            $numero = $value['numero'];
            $bairro = $value['bairro'];
            $cidade = $value['cidade'];
            $estado = $value['estado'];
        endforeach;  
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endereço</title>
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
    <h1>Cadastro do Endereço</h1>
    <form method="post" action="processar.php" onsubmit="return validarEndereco()">
        <table class="tabela">
           <tr>
               <td>Código<input type="text" disabled placeholder="Não preencher" name="codigo" value="<?php echo $codigo;?>" class="campo"></td>
               <td>CEP<span class="obrigatorio">*</span><input type="text"name="cep" value="<?php echo $cep;?>" id="cep" placeholder="XXXXX-XXX" class="campo"></td>
               <td>Rua<span class="obrigatorio">*</span><input type="text" name="rua" value="<?php echo $rua;?>" id="rua" placeholder="Rua, Avenida, etc.." class="campo"></td>
               <td>Número<span class="obrigatorio">*</span><input type="text" name="numero" value="<?php echo $numero;?>" id="numero" placeholder="nº da casa" class="campo"></td>
           </tr>
           <tr>
               <td>Bairro<span class="obrigatorio">*</span><input type="text" name="bairro" value="<?php echo $bairro;?>" id="bairro" placeholder="Informe o bairro" maxlength="20" class="campo"></td>
               <td>Cidade<span class="obrigatorio">*</span>
               <select name='cidade' value="<?php echo $cidade;?>" id="cidade" class="campo">
                    <optgroup label = "São Paulo">
                        <option id = "naoEscolhido">Selecione uma opção</option>
                        <option value = "Mogi das Cruzes">Mogi das Cruzes</option>
                        <option value = "Suzano">Suzano</option>
                        <option value = "Guararema">Guararema</option>
                        <option value = "Itaquaquecetuba">Itaquaquecetuba</option>
                        <option value = "Poá">Poá</option>
                        <option value = "Guarulhos">Guarulhos</option>
                    </optgroup>
                </select>
                </td>
                <td>Estado<span class="obrigatorio">*</span>
                <select name='estado' value="<?php echo $estado;?>" id="estado" class="campo">
                    <optgroup label = "Sudeste">
                        <option id="naoEscolhe">Selecione uma opção</option>
                        <option value = "SP">São Paulo</option>
                        <option value = "RJ">Rio de Janeiro</option>
                        <option value = "MG">Minas Gerais</option>
                        <option value = "ES">Espirito Santo</option>
                    </optgroup>
                </select>
                </td>
               <td>
               <a href="endereco.php"><input type="button"  value="Limpar" id="limpar"></a>
               <input type="hidden" name="id" value="<?php echo $id?>">
               <input type="hidden" name="tipo" value="endereco"/>
               <input type="submit" value="Enviar" id="enviar"></td>
               <td>
               <a href="listar/listarUsuario.php"><input type="button"  value="Consultar" id="consultar2"></a>
               </td>
            </tr>
        </table>
    </form>
</body>
</html>
    