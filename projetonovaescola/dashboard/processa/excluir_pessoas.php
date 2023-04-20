<?php 
    require_once("../../adm/conexao.php");

$id = $_GET["id"];
$sql = "DELETE FROM pessoas WHERE id=:id";
$comando = $pdo -> prepare($sql);
$comando -> bindparam(":id",$id);
$comando -> execute();

if($comando):
    echo "<script> alert ('Registro Excluido com sucesso!'); window.location.href='../index_dash.php'; </script>";
else:
    echo "<script> alert ('Erro ao Excluir Registro'); window.location.href='../index_dash.php'; </script>";
endif;    
?>
