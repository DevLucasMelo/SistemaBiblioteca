<?php
include 'config.php';
if (!isset($_SESSION)){
    session_start();
}

function execute_query($sql){ //Executar consulta (query) no banco de dados 
    $database = open_database(); // retorna $conexao
    $found = null;
    try {		 
        $result = $database->query($sql);
        if ($result <> null) {
			$found = $result->fetch_all(MYSQLI_ASSOC); //registro foi encontrado com sucesso
        }  
    }
    catch (Exception $e){
        echo $e->getmessage(); //não foi possivel realizar a operação
    }
    close_database($database);
    return $found; //Retorna que o registro foi encontrado
}

function execute($sql = null){ //Executar um comando SQL no banco de dados
    $database = open_database();
    try{
        $database->query($sql); //Registro cadastrado com sucesso
    }
    catch(Exception $e){
        echo $e->getmessage(); 
    }
    close_database($database);
}

function open_database(){ // Abrir o banco de dados
    try{
        $conexao = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); // new mysqli cria uma nova conexão com o banco de dados
        return $conexao;
    }
    catch(Exception $e){ // Caso não consiga conectar, ele irá mostrar o erro da tela
        echo $e->getmessage();
        return null;
    }
}

function close_database($conexao){ // Fechar o banco de dados
    try{
        mysqli_close($conexao);
    }
    catch(Exception $e){ 
        echo $e->getmessage();
    }
}
?>