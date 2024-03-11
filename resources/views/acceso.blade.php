<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('estilos/acceso.css') }}">
    <title>Log In</title>
</head>
<body>
    
<div class="acceso">
    <h1>Acceso</h1>
    <form action="{{ url('login') }}" method="post">
        @csrf
        <label for="nombre">Nombre de usuario</label>
        <br>
        <input type="text" name="nombre" placeholder="Nombre" required/>
        <br>
        <input class="acceder" type="submit" value="Acceder" />
    </form>
</div>



