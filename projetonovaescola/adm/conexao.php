<?php
try {

$pdo = new PDO("mysql:host=localhost;dbname=novaescola", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "Conexão bem-sucedida!";

} catch (PDOException $e) {

echo "Falha na conexão: " . $e->getMessage();

}