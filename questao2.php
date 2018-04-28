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

if (count($_POST) > 0) {
    # code...
   # code...
    $post = $_POST;
    
    $data = [
        (int)$post['num1'], 
        (int)$post['num2'], 
        (int)$post['num3'] 
    ];

    arsort($data);

    foreach ($data as  $value) {
        # code...
        echo "<li>".$value."</li>";
    }

}

?>