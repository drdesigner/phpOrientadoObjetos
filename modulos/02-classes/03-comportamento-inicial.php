<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        require('class/ComportamentoInicial.class.php');
        /*$wagner = new ComportamentoInicial;
        $wagner->ver();*/


        $wagner = new ComportamentoInicial('Wagner', 36,'Analista',50.5);
        $marcos = new ComportamentoInicial('Marcos', 32,'Programador',40.5);
        $pedro = new ComportamentoInicial('Pedro', 36,'Analista',30.5);

        $wagner->ver();

    ?>
</body>
</html>