@php
    $session = Session();
    $nombre = $session->get('nombre');
@endphp

<div>
    <h1>Mensajes del chat. Bienvenido {{ $nombre }}</h1>
    <div id="contenedorMensajes">
        
    </div>

    <input type="text" id="textoUsuario" name="textoUsuario" />
    <button onclick="enviarMensaje()">Enviar</button>
    <button onclick="mostrarMensajes()">Actualizar mensajes</button>

    <a href="{{ url('') }}">Cerrar Sesión</a>
</div>

