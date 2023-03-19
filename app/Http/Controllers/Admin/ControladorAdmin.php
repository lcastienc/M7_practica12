<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladorAdmin extends Controller
{
    public function Clientes() {
        return view('Clientes') -> with(['mensajeClientes' => 'Bienvenidos, estamos en la pagina de clientes']);
    }

    public function Facturacion() {
        return view('Facturacion') -> with(['mensajeFacturacion' => 'Bienvenidos, estamos en la pagina Facturacion']);
    }

    public function Contabilidad() {
        return view('Contabilidad') -> with(['mensajeContabilidad' => 'Bienvenidos, estamos en la pagina Contabilidad']);
    }
}
