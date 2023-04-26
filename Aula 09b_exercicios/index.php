<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php
    require_once 'Pessoa.php';
    require_once 'Livro.php';

    $p[0] = new Pessoa("Pedro", 23, "M");
    $p[1] = new Pessoa("Mariana", 25, "F");

    $l[0] = new Livro("JavaScript completo", "Luiz Otavio", 400, $p[0]);
    $l[1] = new Livro("POO no PHP", "Igor Martins", 300, $p[1]);
    $l[2] = new Livro("PHP Avançado", "Gustavo Guanabara", 500, $p[1]);

    print_r($l[1]);

    ?>
    </pre>
</body>

</html>