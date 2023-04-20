<?php
require_once("../adm/conexao.php");
$sql = "select * from pessoas";
$comando = $pdo->prepare($sql);
$comando->execute();
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <?php
    echo ("usario logado ".strtoupper($_SESSION['nome']))
    ?>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">XLS</button>
      </div>
      <!--
          <button type="button" class="btn btn-sm btn-1outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>-->
    </div>
  </div>

  <!--<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->
  
  <div>
    
    <h2>Manutenção de pessoas 
    <a class="btn btn-success" href="cadastrar_apagar.php"> Cadastrar pessoa </a>  
</h2>
  </div>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#ID</th>
          <th scope="col">CPF</th>
          <th scope="col">Nome</th>
          <th scope="col">Tipo_usuario</th>
          <th scope="col">Data nascimento</th>
          <th scope="col">Editar</th>
          <th scope="col">Excuir</th>
          <th scope="col">Status</th>
          

        </tr>
      </thead>
      <tbody>
      
        <?php
        while ($pessoa = $comando->fetch(PDO::FETCH_ASSOC)) {
          ?>

          <tr>
            <td>
              <?php echo $pessoa["id"]; ?>
            </td>
            <td>
              <?php echo $pessoa["cpf"]; ?>
            </td>
            <td>
              <?php echo $pessoa["nome"]; ?>
            </td>
            <td>
              <?php echo $pessoa["tipo_user"]; 
               if ($pessoa["tipo_user"] == 1){
                echo " Professor";
               }else{
                echo "  Discente";
               };

              ?>
            </td>
            <td>
              <?php echo (date('d/m/y', strtotime($pessoa["data_nasc"]))); ?>
            </td>
            <td>
              <a class="btn btn-sm btn-primary" href="editar_pessoas.php?id=<?php echo $pessoa["id"];?>">Editar </a>
            </td>
            <td>
              <a class="btn btn-sm btn-danger" href="processa\excluir_pessoas.php?id=<?php echo $pessoa["id"]; ?>">Excluir </a>
            </td>
            <td>
              <a href="processa\status_pessoas.php?id=<?php echo $pessoa ["id"]; ?> &status=<?php echo $pessoa ["status"];?>">
              <?php
                 if ($pessoa["status"] == 1){
              ?>
              <p class="btn btn-sm btn-success">
                 <?php
                    echo "Ativo";
                 ?>
              </p>
              <?php
                 }else{               
                ?>
              <p class="btn btn-sm btn-danger">
                 <?php
                    echo "Desativo";
                 ?>
              </p>     
              <?php 
              }; 
              ?>
              </a>
            </td>

          </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
  <Center>
    <footer style="color: orange; background-color: black; font-size: 35px; position: absolute;
  bottom: 0;
  height: 8.5rem;  ">
      klelson rodrigues- programação web 3- semana 05-tecnico em informatica para internet-IFSULMINAS
    </footer>
  </Center>
</main>
</div>
</div>