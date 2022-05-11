<?php
    session_start();
    extract($_POST);
    if($usuario == "Administrador" && $senha == "123"){
        $_SESSION['usuario'] = [
            'nome' => $usuario,
            'senha' => $senha
        ];
        header("Content-type: application/json");
        echo ('{"mensagem": "OK"}');
    }else{
        echo "Usuário e senha inválidos";
    }