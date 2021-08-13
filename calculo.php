<?php
 
if (
     isset ($_POST["nome"]) &&
     isset($_POST["salario"]) &&
     isset($_POST["cargo"]) &&
     isset($_POST["genero"])) { 

        $nome = $_POST["nome"];
        $salario = $_POST["salario"];
        $genero = $_POST["genero"];
        $cargo = $_POST["cargo"];
     
$salarioNovo = $salario > 5000 ? $salario * 1.1 : $salario * 1.2;

     }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calcular Salário</title>
</head>
<body>
    <main>
        <p> <?= $genero === "m" ? "O" : ($genero === "f" ? "A" : "") ?>
        <?= $nome?> passará a receber R$ 
        <?= number_format($salarioNovo, 2, ",", ".") ?>
        no cargo de <?= $cargo ?> </p>
    </main>
</body>
</html>
 