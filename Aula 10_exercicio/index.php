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
    require_once 'Visitante.php';
    require_once 'Aluno.php';
    require_once 'Professor.php';


    /*$v1 = new visitante();
    
    $v1->setNome("Juvenal");
    $v1->setIdade(44);
    $v1->setSexo("M");
    
    print_r($v1); */

    $a1 = new Aluno("Pedro", 16, "M");

    $a1->setNome("Pedro");
    $a1->setIdade(16);
    $a1->setSexo("M");
    $a1->setMatricula(1111);
    $a1->setCurso("Informática");
    $a1->pagarMensalidade();

    print_r($a1);

    $b1 = new Bolsista("Igor", 23, "M");

    $b1->setNome("Igor");
    $b1->setIdade(23);
    $b1->setSexo("M");
    $b1->setCurso("Progamação");
    $b1->setBolsa(12.5);
    $b1->renovarBolsa();
    $b1->pagarMensalidade();

    print_r($b1);



    ?>
    </pre>
</body>

</html>