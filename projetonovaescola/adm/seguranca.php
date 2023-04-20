<?php
function seguranca(){
    if(!isset($_SESSION['nome'])){
        header("Location: ../login.php");
    } else{

    }
}
?>