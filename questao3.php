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
    
</body>
</html>

<?php 

if (isset($_POST)) {
    # code...
   # code...
    $post = $_POST;
    $A = $post['num1']; 
    $B = $post['num2']; 
    $C = $post['num3'];

    if ( ($A< $B+$C) and ($B<$A+$C)and($C<$A){
        echo "Os valores digitados formam um Triangulo";
    }
    if (($A== and ($B==$C)){
        echo "Os valores digitados formam um Triangulo Equilatero";
    }else if (($A == $B || $B == $C || $C == $A){
        echo "Os valores digitados formam um Triangulo Isosceles";
    }else {
        echo "Os valores digitados formam um Triangulo Escaleno";
    }
                     


}

?>