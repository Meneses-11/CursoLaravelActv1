<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="{{route('validar')}}" method="POST">
        @csrf
        <label for="elemento">Usuario</label><br>
        <input type="text" name="usuario" id='elemento'><br>
        <label for="elemento">Password</label><br>
        <input type="text" name="password" id='elemento'><br>
        <input type="submit" value="Send">
    </form>
</body>
</html>