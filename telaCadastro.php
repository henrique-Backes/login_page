<?php

    if (isset($_POST['submit'])) {

        include_once('config.php');

        $nome = $_POST['name'];
        $senha = $_POST['password'];
        $email = $_POST['email'];
        $celular = $_POST['cellphone'];
        $genero = $_POST['gender'];
        $nascimento = $_POST['birthDate'];
        $cidade = $_POST['city'];
        $estado = $_POST['state'];
        $endereco = $_POST['address'];

        $result = mysqli_query($conexao, "INSERT INTO users(name, password, email, cellphone, gender, birthday, city, state, address) 
        VALUES('$nome', '$senha, '$email', '$celular', '$genero', '$nascimento', '$cidade', '$estado', '$endereco')");

        header("Location: telaLogin.php");
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigin Page</title>
    <style>
        body
        {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,51));
        }
        .box
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            color: white;
        }
        fieldset
        {
            border: 3px solid dodgerblue;
        }
        legend
        {
            border: 1px solid dodgerblue;
            border-radius: 8px;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
        }
        .inputUser
        {
            outline-width: 1px;
            outline-color: dodgerblue;
            color: black;
            font-size: 15px;
            width: 99%;
        }
        .inputUser::-webkit-input-placeholder
        { /* WebKit browsers */
            color:    black;
        }
        .inputUser:-moz-placeholder 
        { /* Mozilla Firefox 4 to 18 */
            color:    black;
            opacity:  1;
        }
        .inputUser::-moz-placeholder 
        { /* Mozilla Firefox 19+ */
            color:    black;
            opacity:  1;
        }
        .inputUser:-ms-input-placeholder 
        { /* Internet Explorer 10+ */
            color:    black;
        }
        a{
            position: absolute;
            top: 20px;
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: dodgerblue;
        }
        .inputdate
        {
            border: none;
            border-radius: 10px;
            padding: 8px;
            outline-width: 1px;
            outline-color: dodgerblue;
        }
        #submit
        {
            background-image: linear-gradient(to right, rgb(0,92,197), rgb(90,20,220));
            width: 100%;
            padding: 10px;
            border: none;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover
        {
            background-image: linear-gradient(to right, rgb(0,80,172), rgb(80,19,195));
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="telaCadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Novos Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="name" id="name" class="inputUser" placeholder="Nome Completo" required>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="password" id="password" class="inputUser" placeholder="Senha" required>
                </div>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" placeholder="Email"required>
                </div>
                <br>
                <div class="inputBox">
                    <input type="cell" name="cellphone" id="cellphone" class="inputUser" placeholder="Telefone"required>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="female" name="gender" value="female" required>
                <label for="female">Feminino</label>
                <br>
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Masculino</label>
                <br>
                <input type="radio" id="outer" name="gender" value="outer" required>
                <label for="outer">Outro</label>
                <br><br>
                <label for="birthDate">Data de Nascimento:</label>
                <input type="date" name="birthDate" id="birthDate"class="inputdate"required>
                <br>
                <div class="inputBox">
                    <input type="text" name="city" id="city" class="inputUser" placeholder="Cidade" required>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="state" id="state" class="inputUser" placeholder="Estado" required>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="address" id="address" class="inputUser" placeholder="Endereço" required>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>