<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class UsuariosController extends Controller
{
    // Página de bienvenida, para escribir el login
    public function acceso() {

        $session = Session();

        // if($session->get('nombre') != null) {
        if($session->has('nombre')) {
         
            return  view('templates/header').
                    view('listadoMensajes').
                    view('templates/footer');
        } 

        return  view('templates/header').
                view('acceso').
                view('templates/footer');
        
    }

    public function registrarSesion(Request $request) {

        // Obtenemos el valor enviado por el formulario
        $nombre = $request->post('nombre');

        // Creamos un objeto de tipo sesión:
        $session = Session();
        $session->put('nombre', $nombre);
        
        return  view('templates/header').
                view('listadoMensajes').
                view('templates/footer');

    }

     //Cerrar Sesión
        public function cerrar(Request $request): RedirectResponse{
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}


