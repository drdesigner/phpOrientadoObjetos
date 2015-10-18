<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        require('class/ReplicaClonagem.class.php');
        $readA = new ReplicaClonagem("posts","categoria = 'noticias'",'ORDER BY data DESC');
        $readA->ler();
         var_dump($readA);

        $readA->setTermos("categoria = 'internet'");
        $readA->ler();

        $readB = clone($readA);
        $readB->setTermos("categoria = 'redes sociais'");
        $readB->ler();
        var_dump($readB);

        $readC = clone($readA);
        $readC->setTabela("comentarios");
        $readC->setTermos("post = 25");
        $readC->ler();
        var_dump($readC);

    ?>
</body>
</html>