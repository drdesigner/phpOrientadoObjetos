<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        require('class/AtributosMetodos.class.php');
        $pessoa = new AtributosMetodos();
        $pessoa->setUsuario('Wagner Celso Josué', 36,'Analísta de TI');

        echo $pessoa->getUsuario();

        echo "<hr>";

        $pessoa->envelhecer();
        $pessoa->envelhecer();
        $pessoa->envelhecer();

        $pessoa->getClass();
    ?>
</body>
</html>
