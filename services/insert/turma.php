<?php
include '../../db.php';

$turma = $_POST['turma'];
$curso = $_POST['curso'];

$query = "INSERT INTO TURMAS VALUES( '$turma', '$curso' )";

mysqli_query($conexao, $query);
header('location:'.$_SERVER['HTTP_REFERER']);