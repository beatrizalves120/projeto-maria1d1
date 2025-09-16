<?php
include "conexao.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>formulario<h1>
    <form class="maria"> 
     <h3>Cadastro</h3>
     <input type="text" placeholder="login" id="login">
     <input type="password" placeholder="senha" id="senha">
     <input type="submit" onclick="logar()"; return false>
</body>
</html>