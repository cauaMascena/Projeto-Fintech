<link rel= "stylesheet" href="style.css">

<?php

if (
    isset($_POST["nome"]) && isset($_POST["salario"]) && isset($_POST["cargo"])
) {

    $nome = $_POST["nome"];
    $salario = $_POST["salario"];
    $cargo = $_POST["cargo"];
}else($salario > 5000){
    $salario = $salario + 10%;

}

?>