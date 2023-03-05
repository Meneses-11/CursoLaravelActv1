<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .encabezado {
            background-color: red;
            display: inline-block;
            width: 90%;
            height: 10%;
            border: 15px solid green;
            padding: 50px;
            margin: 20px;
        }
    </style>
</head>
<body>
    <header class="encabezado">
        ENCABEZADO DE LA EMPRESA
    </header>
    @yield('contenido')
</body>
</html>