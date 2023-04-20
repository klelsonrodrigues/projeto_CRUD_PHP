<?php
session_start();
if(isset($_POST["acao"])){

    //importando arq conexao.php

    require_once("adm/conexao.php");

    //obtendo valores digitados no formulário;

    $usuario = $_POST["usuario"];

    $senha   = $_POST["senha"];

    $senha_hash = hash('sha256',$senha);
    
    //Verificar se existe na base de dados

    $sql = "select * from pessoas where pessoas.cpf =:login and pessoas.senha = :senha_hash";

    $comando = $pdo -> prepare($sql);

    $comando -> bindParam(":login",$usuario);

    $comando -> bindParam(":senha_hash",$senha_hash);

    $comando -> execute();

    if($comando -> rowCount()==1){
        $usuario = $comando -> fetch (PDO::FETCH_ASSOC);
        $_SESSION['nome'] = $usuario['nome'] ;
        
        header("location: dashboard/index_dash.php");

    } else {

        echo "Usuario não encontrado na base de dados";
        header("location: login.php");

    }

} else {

    echo "Erro... Acesso Indevido!";

}