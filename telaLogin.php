<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
        .inputSubmit
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
        .inputSubmit:hover
        {
            background-image: linear-gradient(to right, rgb(0,80,172), rgb(80,19,195));
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
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <fieldset>
            <legend><b>Login</b></legend>
            <form action="temLogin.php" method="POST">

                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" placeholder="Email" required>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="password" id="password" class="inputUser" placeholder="Senha" required>
                    <br><br>
                </div>
                <input class="inputSubmit" type="submit" name="submit" value="Enviar"></button>
            </form>
        </fieldset>
    </div>
</body>
</html>