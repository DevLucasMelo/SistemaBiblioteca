<?php
    include 'bd/database.php';

    $tipo = filter_input(INPUT_POST,'tipo',FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);
    
    if($tipo == "usuario"){
        $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
        $rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $celular = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        $restricao = filter_input(INPUT_POST, 'restricao', FILTER_SANITIZE_STRING);
        $tipoUsuario = filter_input(INPUT_POST, 'tipoUsuario', FILTER_SANITIZE_STRING);

        if($id ==  ""){
            $sql = "INSERT INTO usuario (endereco, nome, cpf, rg, email, telefone_celular, login_usuario, 
            senha, restricao, tipo_usuario) 
            values ('$endereco', '$nome', '$cpf', '$rg', '$email', 
            '$celular', '$login', '$senha', '$restricao', '$tipoUsuario')";
            execute($sql);
        } 
        else{
            $sql = "UPDATE usuario SET endereco = '$endereco', nome = '$nome', cpf = '$cpf', rg = '$rg', 
            email = '$email', telefone_celular = '$celular', login_usuario = '$login', 
            senha = '$senha', restricao = '$restricao', tipo_usuario = '$tipoUsuario' WHERE codigo =" . $id;
            execute($sql);
        }
        header('location: usuario.php');
    }

    if($tipo == "endereco"){
        $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
        $rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
        $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT);
        $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
        $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
        $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);

        if($id ==  ""){
            $sql = "INSERT INTO endereco (cep, rua, numero, bairro, cidade, estado) 
            values ('$cep', '$rua', '$numero', '$bairro', '$cidade', '$estado')";
            execute($sql);
        } 
        else{
            $sql = "UPDATE endereco SET cep = '$cep', rua = '$rua', numero = '$numero', bairro = '$bairro', 
            cidade = '$cidade', estado = '$estado' WHERE codigo =" . $id;
            execute($sql);
        }
        header('location: endereco.php');
    }
    
    if($tipo == 'administrador'){
        $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
        
        if($id == ""){
            $sql = "INSERT INTO administrador (usuario) values ('$usuario')";
            execute($sql);
        } 
        else{
            $sql = "UPDATE administrador SET usuario = '$usuario' WHERE codigo = " . $id;
            execute($sql);
        }
        header('location: administrador.php');
        exit;
    }
    if($tipo == "emprestimo"){
        $exemplar = filter_input(INPUT_POST, 'exemplar', FILTER_SANITIZE_STRING);
        $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
        $dataEmprestimo = filter_input(INPUT_POST, 'emprestimo', FILTER_SANITIZE_NUMBER_INT);
        $devolucao = filter_input(INPUT_POST, 'devolucao', FILTER_SANITIZE_NUMBER_INT);
        $devolucaoEfetiva = filter_input(INPUT_POST, 'efetiva', FILTER_SANITIZE_NUMBER_INT);
        $estadoLivro = filter_input(INPUT_POST, 'estadoLivro', FILTER_SANITIZE_STRING);

        if($id ==  ""){
            $sql = "INSERT INTO emprestimo (exemplar, usuario, dt_emprestimo, dt_devolucao, dt_efetiva, estado_livro) 
            values ('$exemplar', '$usuario', '$dataEmprestimo', '$devolucao', '$devolucaoEfetiva','$estadoLivro')";
            execute($sql);
        } 
        else{
            $sql = "UPDATE emprestimo SET exemplar = '$exemplar', usuario = '$usuario', dt_emprestimo = '$dataEmprestimo', 
            dt_devolucao = '$devolucao', dt_efetiva = '$devolucaoEfetiva', estado_livro = '$estadoLivro' WHERE codigo =" . $id;
            execute($sql);
        }
        header('location: emprestimo.php');
    }
    if($tipo == "editora"){
        $editora = filter_input(INPUT_POST, 'editora', FILTER_SANITIZE_STRING);
        $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);

        if($id ==  ""){
            $sql = "INSERT INTO editora (editora, endereco) 
            values ('$editora', '$endereco')";
            execute($sql);
        } 
        else{
            $sql = "UPDATE editora SET editora = '$editora', endereco = '$endereco' WHERE codigo =" . $id;
            execute($sql);
        }
        header('location: editora.php');
    }
    if($tipo == "exemplar"){
        $tombo = filter_input(INPUT_POST, 'editora', FILTER_SANITIZE_STRING);
        $codigoLivro = filter_input(INPUT_POST, 'codigoLivro', FILTER_SANITIZE_NUMBER_INT);
        $localização = filter_input(INPUT_POST, 'localizacao', FILTER_SANITIZE_STRING);
        $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);

        if($id ==  ""){
            $sql = "INSERT INTO exemplar (tombo, codigo_livro, localizacao, status_livro) 
            values ('$tombo', '$codigoLivro', '$localização', '$status')";
            execute($sql);
        } 
        else{
            $sql = "UPDATE exemplar SET tombo = '$tombo', codigo_livro = '$codigoLivro', localizacao = '$localizacao', 
            status_livro = '$status' WHERE codigo =" . $id;
            execute($sql);
        }
        header('location: exemplar.php');
    }
    if($tipo == "autorLivro"){
        $autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
        $livro = filter_input(INPUT_POST, 'livro', FILTER_SANITIZE_STRING);

        if($id ==  ""){
            $sql = "INSERT INTO autor_livro (autor, livro) 
            values ('$autor', '$livro')";
            execute($sql);
        } 
        else{
            $sql = "UPDATE autor_livro SET autor = '$autor', livro = '$livro' WHERE codigo =" . $id;
            execute($sql);
        }
        header('location: autorLivro.php');
    }
    if($tipo == "livro"){
        $editora = filter_input(INPUT_POST, 'editora', FILTER_SANITIZE_STRING);
        $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
        $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
        $subtitulo = filter_input(INPUT_POST, 'subtitulo', FILTER_SANITIZE_STRING);
        $idioma = filter_input(INPUT_POST, 'idioma', FILTER_SANITIZE_STRING);

        if($id ==  ""){
            $sql = "INSERT INTO livro (editora, categoria, titulo, subtitulo, idioma) 
            values ('$editora', '$categoria', '$titulo', '$subtitulo', '$idioma')";
            execute($sql);
        } 
        else{
            $sql = "UPDATE livro SET editora = '$editora', categoria = '$categoria', titulo = '$titulo', 
            subtitulo = '$subtitulo', idioma = '$idioma' WHERE codigo =" . $id;
            execute($sql);
        }
        header('location: livro.php');
    }
    if($tipo == "autor"){
        $autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);

        if($id ==  ""){
            $sql = "INSERT INTO autor (autor) values ('$autor')";
            execute($sql);
        } 
        else{
            $sql = "UPDATE autor SET autor = '$autor' WHERE codigo =" . $id;
            execute($sql);
        }
        header('location: autor.php');
    }
    if($tipo == "categoria"){
        $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);

        if($id ==  ""){
            $sql = "INSERT INTO categoria_livro (categoria) values ('$categoria')";
            execute($sql);
        } 
        else{
            $sql = "UPDATE categoria_livro SET categoria = '$categoria' WHERE codigo =" . $id;
            execute($sql);
        }
        header('location: categoria.php');
    }

?>