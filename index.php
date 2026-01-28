<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX5</title>
</head>
<body>
    <?php 
    $nome = "Kaua";
    $sobrenome = "Alves";
    $idade = 19;
    $solteiro = true;
    $gosto_jesus = true;
    $salario = 10000.50;
    const pais = "Brasil";

    echo "Meu nome é $nome $sobrenome";
    echo "<br>Tenho $idade anos de idade";
    echo "<br>Solteiro? " . ($solteiro ? "Sim" : "Não");
    echo "<br>Gosto de Jesus? " . ($gosto_jesus ? "Sim" : "Não");
    echo "<br>Moro no " . pais;
    echo "<br>Meu salário é R$ " . number_format($salario, 2, ',', '.');
    ?>
</body>
</html>