<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('estilos/mensajes.css') }}">
    <title>Mensajes</title>
</head>

<body>
    @php
    $session = Session();
    $nombre = $session->get('nombre');
    @endphp

    <div>
        <h1>Bandeja de entrada de {{ $nombre }}</h1>
    

    <div id="contenedorMensajes">
        
    </div>

    <input type="text" id="textoUsuario" name="textoUsuario"/>
    <input type="file">
    <button class="enviar" onclick="enviarMensaje()">Enviar</button>
    <button class="mostrar" onclick="mostrarMensajes()">Actualizar mensajes</button>

    <a href="{{ url('cerrar') }}">Cerrar Sesión</a>


    </div>

</body>
</html>


