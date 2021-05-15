<?php
    include 'database.php';

    $tipo = filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);

    if($tipo == "usuario"){
        $sql = "delete from usuario where codigo = ". $id;
        execute($sql);
        header('location: ../listar/listarUsuario.php');
    }

    if($tipo == "endereco"){
        $sql = "delete from endereco where codigo = ". $id;
        execute($sql);
        header('location: ../endereco.php');
    }

    if($tipo == "administrador"){
        $sql = "delete from administrador where codigo = ". $id;
        execute($sql);
        header('location: ../administrador.php');
    }

    if($tipo == "emprestimo"){
        $sql = "delete from emprestimo where codigo = ". $id;
        execute($sql);
        header('location: ../emprestimo.php');
    }

    if($tipo == "editora"){
        $sql = "delete from editora where codigo = ". $id;
        execute($sql);
        header('location: ../editora.php');
    }

    if($tipo == "autorLivro"){
        $sql = "delete from autor_livro where codigo = ". $id;
        execute($sql);
        header('location: ../autorLivro.php');
    }

    if($tipo == "exemplar"){
        $sql = "delete from exemplar where codigo = ". $id;
        execute($sql);
        header('location: ../exemplar.php');
    }

    if($tipo == "livro"){
        $sql = "delete from livro where codigo = ". $id;
        execute($sql);
        header('location: ../livro.php');
    }

    if($tipo == "autor"){
        $sql = "delete from autor where codigo = ". $id;
        execute($sql);
        header('location: ../autor.php');
    }

    if($tipo == "categoria"){
        $sql = "delete from categoria_livro where codigo = ". $id;
        execute($sql);
        header('location: ../categoria.php');
    }
?>