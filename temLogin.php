<?php
    session_start();
//    print_r($_REQUEST);
    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])) {

        include_once('config.php');

        $email = $_POST['email'];
        $senha = $_POST['password'];

        //echo "Email: " . $email . "<br>" . "Senha: " . $senha;

        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$senha'";

        $result = $conexao->query($sql);

        //print_r ($result);

        if (mysqli_num_rows($result) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header("Location: telaLogin.php");
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header("Location: sistema.php");
        }
    } else {
        header('Location: telaLogin.php');
    }
?>