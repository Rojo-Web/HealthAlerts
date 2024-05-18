<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo Electrónico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 20%;
            height: auto;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo" >
            <img src="{{asset("images/logo.png")}}" alt="Logo" >
        </div>
        <h1>Correo Electrónico</h1>
        <p>Este es el contenido del correo electrónico:</p>
        <p><strong>Tipo de PQRS:</strong> {{$data['tipo']}}</p>
        <p><strong>Mensaje:</strong> {{$data['texto']}}</p>
    </div>
</body>
</html>
