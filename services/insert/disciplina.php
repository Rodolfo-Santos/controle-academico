<?php
include '../../db.php';

$nome = $_POST['nome'];
$curso = $_POST['curso'];

$query = "INSERT INTO DISCIPLINAS VALUES( NULL, '$nome', '$curso' )";

mysqli_query($conexao, $query);
header('location:'.$_SERVER['HTTP_REFERER']);