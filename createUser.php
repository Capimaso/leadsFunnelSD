<?php

    require("connector.php");

    if (isset($_POST)){

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $salario = $_POST['salario'];

        $query = "INSERT INTO usuario (nome, telefone, email, salario) VALUES ('$nome', '$telefone', '$email', '$salario')";

        $stmt = $pdo->prepare($query);
        $stmt->execute();

        header("Location: sucess.php");
    }