<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    require('class/InteracaoClasse.class.php');
    require('class/InteracaoDeObjetos.class.php');

    $wagner  = new InteracaoClasse('Wagner',36,'Analista de TI', 50);

    $empresa = new InteracaoDeObjetos('Centro Universitário de Lavras');
    $empresa->Contratar($wagner,'Analista de TI', 3200);

    $empresa->Pagar();
    $empresa->Promover('Gerente de Projetos', 5000);
    $empresa->Pagar();
    $empresa->Demitido(2300);

    var_dump($wagner,$empresa);
?>
</body>
</html>