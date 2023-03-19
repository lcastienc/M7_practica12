<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladorAdmin extends Controller
{
    //Funcion Clientes, que sera llamada por la ruta /adb/Clientes que nos mostrara la view Clientes
    //La view mostrara el mensaje que definamos dentro de esta funcion
    public function Clientes() {
        return view('Clientes') -> with(['mensajeClientes' => 'Bienvenidos, estamos en la pagina de clientes']);
    }

    //Funcion Facturacion, que sera llamada por la ruta /adb/Facturacion que nos mostrara la view Facturacion
    //La view mostrara el mensaje que definamos dentro de esta funcion
    public function Facturacion() {
        return view('Facturacion') -> with(['mensajeFacturacion' => 'Bienvenidos, estamos en la pagina Facturacion']);
    }

    //Funcion Contabilidad, que sera llamada por la ruta /adb/Contabilidad que nos mostrara la view Contabilidad
    //La view mostrara el mensaje que definamos dentro de esta funcion
    public function Contabilidad() {
        return view('Contabilidad') -> with(['mensajeContabilidad' => 'Bienvenidos, estamos en la pagina Contabilidad']);
    }
}
