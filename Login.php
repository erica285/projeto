<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(45deg, #ffffff, #92b5d1);
        }
        div {
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 30%;
            left: 40%;
            padding: 80px;
            color: white;
            border-radius: 25px;
        }
        input {
            padding: 15px;
            border: none;
            outline: none;
        }
        button {
            background-color: #92b5d1;
            padding: 15px;
            border: none;
            width: 100%;
            border-radius: 15px;
            color: white;
         }
         button:hover {
            background-color: orange;
            cursor: pointer;
         }
    </style>
</head>
<body>
 <div>
    <h1 align="center">Login</h1>
   <input type="text" name="" placeholder="Nome">
   <br><br>
   <input type="password" name="" placeholder="Senha">
   <br><br>
   <button>Enviar</button>
</div>
</body>
</html>