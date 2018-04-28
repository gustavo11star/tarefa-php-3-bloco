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
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="" placeholder="Informe o nome">
        <label for="nome">Sexo</label>
        M<input type="radio" name="sexo" id="" value="m">
        F<input type="radio" name="sexo" id="f" value="f">
        <label for="nome">Idade</label>
        <input type="number" name="idade" id="" >
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
    $post = $_POST;
    if ($post['sexo'] == "f" and $post['idade'] < 25) {
        echo "<li>ACEITA</li>";
    }else {
        echo "<li>".$post['nome']." NÃO ACEITA</li>";
        
    }
}

?>