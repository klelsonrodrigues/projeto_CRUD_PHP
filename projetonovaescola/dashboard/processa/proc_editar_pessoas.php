<?php 
    require_once("../../adm/conexao.php");
 $id        = $_POST["id"]; 
 $nome      = $_POST["nome"];
 $cpf       = $_POST["cpf"];
 $senha     = $_POST ["senha"];
 $tipo_user = $_POST["tipo_user"];
 $data_nasc = $_POST["data_nasc"];

$senha_hash = hash('sha256',$senha);
$sql = "UPDATE pessoas SET nome=:nome,cpf=:cpf,senha=:senha,tipo_user=:tipo_user,data_nasc=:data_nasc,modified=NOW() WHERE id=:id "; 
$comando = $pdo -> prepare($sql);
$comando -> bindparam(":id",$id);
$comando -> bindparam(":nome",$nome);
$comando -> bindparam(":cpf",$cpf);
$comando -> bindparam(":senha",$senha);
$comando -> bindparam(":tipo_user",$tipo_user);
$comando -> bindparam(":data_nasc",$data_nasc);
$comando -> execute();
?>
<?php
    header("location: ../index_dash.php");
?>