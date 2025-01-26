<?php
    include_once('config.php');

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $nome = $_POST['name'];
        $senha = $_POST['password'];
        $email = $_POST['email'];
        $celular = $_POST['cellphone'];
        $genero = $_POST['gender'];
        $nascimento = $_POST['birthDate'];
        $cidade = $_POST['city'];
        $estado = $_POST['state'];
        $endereco = $_POST['address'];

        $sqlUpdate = "UPDATE users
        SET 
            name='$nome', 
            password='$senha', 
            email='$email', 
            cellphone='$celular', 
            gender='$genero', 
            birthday='$nascimento', 
            city='$cidade', 
            state='$estado', 
            address='$endereco' 
        WHERE idusers='$id'";

        $result = $conexao->query($sqlUpdate);
    }

    header('Location: sistema.php');
?>