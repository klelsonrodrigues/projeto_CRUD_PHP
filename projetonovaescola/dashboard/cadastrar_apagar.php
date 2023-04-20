<?php
include_once("view/topo.php");
include_once("view/lateral.php");
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <form method="POST" action="processa/proc_cadastrar_pessoas.php">
            <label for="nome"> nome:</label> <br>
            <input type="text" name="nome"> <br><br>
            <label for="cpf"> cpf:</label> <br>
            <input type="text" name="cpf"> <br><br>
            <label for="senha"> senha:</label> <br>
            <input type="password" name="senha"> <br><br>
            <label for="tipo_user"> tipo usuario:</label> <br>
            <input type="text" name="tipo_user"> <br><br>
            <label for="data_nasc"> Data Nascimento:</label> <br>
            <input type="date" name="data_nasc"> <br><br>

            <button class="w-100 btn btn-lg btn-success" type="submit" name="acao">Cadastrar</button>
        </form>

    </div>
</main>
<?php
include_once("view/rodape.php")

?>