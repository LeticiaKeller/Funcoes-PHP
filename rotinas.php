<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="rotinas.css">
    <title>Rotinas</title>
</head>
<body>

<div class="container">
    <?php
    echo "<h1> Funções: </h1></br>";
    function soma($a,$b){
        $s= $a + $b;
        echo "<h3>Soma:</h3> $s.";
    }

    soma(4,9);

    echo "<hr>";

//função que retorna valor
    function multiplica($c,$d){
        $m= $c * $d;
        return $m;
    }

    $res = multiplica(5,7);
    echo "<h3>Multiplicação:</h3> $res.";

    echo "<hr>";

    function soma2(){
    $p= func_get_args();
    $total= func_num_args();
    $s=0;
        for ($i=0 ; $i<$total ; $i++){
        $s += $p[$i];
        }
      return $s;
    }

    $r= soma2(3,2,6,7,3,2);
    echo "<h3>Soma de vetor:</h3> $r.";

    echo"<hr>";

//passagem de parametro por referência
    function teste(&$t){
        $div = $t / 2;
        echo "<h3>Divisão:</h3> $div.";
    }

    $num= 20;
    teste($num);

    echo "<hr>";

    include "rotinas2.php";
    echo "<h1>Testando novas funções!</h1>";
    ola();

//Se não tiver a função e eu chamar pelo metodo require todo o programa para.
    require "rotinas3.php";
    mostravalor(5);
    
    ?>

</div>
</body>
</html>