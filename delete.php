<?php 

    if (!empty($_GET['id'])) {

        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM users WHERE idusers=$id";

        $result = $conexao->query($sqlSelect);
        
        if ($result->num_rows > 0) {

            $sqlDelete = "DELETE FROM users WHERE idusers = '$id'";
            $resultDelete = $conexao->query($sqlDelete);

        } else {
            header('Location: sistema.php');
        }


    }

    header('Location: sistema.php');

?>