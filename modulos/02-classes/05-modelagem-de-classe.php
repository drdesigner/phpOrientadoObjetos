<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    require('class/ModelagemDeClasse.class.php');

    $wagner = new ModelagemDeClasse('Wagner',36,'Analista de Sistemas',4500);
    $wagner->setProfissao('Web Master');
    $wagner->Trabalhar('Um portal', 1250);
    var_dump($wagner);



?>
</body>
</html>