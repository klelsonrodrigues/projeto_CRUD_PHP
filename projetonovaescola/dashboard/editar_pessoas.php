<?php
include_once("view/topo.php");
include_once("view/lateral.php");
include_once("../adm/conexao.php");
if(isset($_GET["id"])){
    $sql ="SELECT * FROM pessoas WHERE id=:id";
    $comando = $pdo -> prepare($sql);
    $comando -> bindValue(":id",$_GET["id"]);
    $comando -> execute();
    $pessoa =$comando -> fetch();   
}else{
    header("location:index_dash.php");
}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <form method="POST" action="processa/proc_editar_pessoas.php">
            <label for="nome"> nome:</label> <br>
            <input type="text" name="nome" value="<?php echo $pessoa["nome"];?>"/> <br><br>
            <label for="cpf"> cpf:</label> <br>
            <input type="text" name="cpf"  value="<?php echo $pessoa["cpf"];?>"/> <br><br>
            <label for="senha"> senha:</label> <br>
            <input type="text" name="senha" value="<?php echo "*senha*";?>"/> <br><br>
            <label for="tipo_user"> tipo usuario:</label> <br>
            <input type="text" name="tipo_user" value="<?php echo $pessoa["tipo_user"];?>"/> <br><br>
            <label for="data_nasc"> Data Nascimento:</label> <br>
            <input type="date" name="data_nasc" value="<?php echo $pessoa["data_nasc"];?>"/> <br><br>
            <input type="hidden" name="id" value="<?php echo $pessoa["id"];?>"/>

            <button class=" btn btn-lg btn-success" type="submit" name="acao">salvar edicao</button>  <a href="index_dash.php" class="btn btn-danger"> Cancelar </a>;
          
        </form>

    </div>
</main>
<?php
include_once("view/rodape.php")

?>