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
        <input type="number" name="num" id="">
        <button type="submit">Verificar</button>
    </form>
    <br>
    <a href="http://localhost:8080/">Voltar</a>
    <br>
</body>
</html>

<?php

    $data =[1,2,3,4,5,6,7,8,9,10,11,12];

    if (count($_POST) > 0) {
        # code...
        $post = $_POST;
        if (!in_array((int)$post['num'],$data)) {
            # code...
            echo "Esse mes não existe";
        }else {
        echo "Esse mes existe";
        }
    }

?>