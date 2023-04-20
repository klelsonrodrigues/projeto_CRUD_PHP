<?php
require_once("../adm/conexao.php");
$sql = "select * from pessoas";
$comando = $pdo->prepare($sql);
$comando->execute();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listar PHP</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>

<body>
    <h1>Listar registros da base de dados</h1>
    <a href="cadastrar_apagar.php">Adicionar novo registro</a><br><br>
    <table id="minhaTabela">
        <thead>
            <Th>#ID</Th>
            <th>CPF</th>
            <th>NOME</th>
            <th>SENHA</th>
            <th>TIPO_USER</th>
            <th>DATA_NASC</th>
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
                        <?php echo $pessoa["senha"]; ?>
                    </td>
                    <td>
                        <?php echo $pessoa["tipo_user"]; ?>
                    </td>
                    <td>
                        <?php echo (date('d/m/y', strtotime($pessoa["data_nasc"]))); ?>
                    </td>
                </tr>
            <?php } ?>


        </tbody>



    </table>
</body>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

<script type="text/javascript">

    $(document).ready(function() {

        $('#minhaTabela').DataTable({

            "language": {

                "url": "http://cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json"

            },

            dom: 'Bfrtip',

            "buttons": [

                'copy', 'csv', 'excel', 'pdf', 'print'

            ],

            paging: true

        });

    });

</script>

</html>