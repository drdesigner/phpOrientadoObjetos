<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        require('class/ClassesObjetos.class.php');

        $teste = new ClassesObjetos();
        $teste->getClass('de introdução', 'mostrar uma classe');
        $teste->verClass();

        $teste->Classes = 'Este é um teste';
        $teste->Funcao = 'Outro teste';
        $teste->verClass();
    ?>
</body>
</html>
