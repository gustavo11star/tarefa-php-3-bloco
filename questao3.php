<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="#" method="post">
        <input type="number" name="num1" id="">
        <input type="number" name="num2" id="">
        <input type="number" name="num3" id="">
        <button type="submit">Verificar</button>

    </form>
    <br>
    <a href="http://localhost:8080/">Voltar</a>
    <br>
</body>
</html>

<?php 

if (count($_POST)) {
    # code...
   # code...
    $post = $_POST;
    $_POST = null;
    $A = $post['num1']; 
    $B = $post['num2']; 
    $C = $post['num3'];
    $aux = $A;

    if ($A == $aux and $B == $aux and $C == $aux ){
        echo "Triângulo Equilátero";
    }

    if ($A != $B and $B != $C and $C != $A){
        echo "Triângulo Escaleno";
    }
    
    $data = array_unique([$A,$B,$C]);
    if (count($data) == 2) {
        # code...
        echo "Triângulo Isósceles";
    }

}

?>