<?php 
    require_once("../../adm/conexao.php");

$id = $_GET["id"];
$situacao = $_GET["status"];
$sql = "UPDATE pessoas SET `status`=:situacao WHERE id=:id";
$comando = $pdo->prepare($sql);
$comando->bindparam(":id",$id);

if($situacao == 1){
    $comando -> bindvalue(":situacao", "0");
}else{
    $comando -> bindvalue(":situacao","1");
}    
$comando-> execute();
header("Location:../index_dash.php");
?>
