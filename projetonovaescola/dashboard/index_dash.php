<?php
session_start();
require_once "view/topo.php";
require_once "../adm/seguranca.php";
seguranca();
require_once "view/lateral.php";
require_once "view/principal.php";
require_once "view/rodape.php";
?>