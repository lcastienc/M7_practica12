<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControladorAdmin;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Para acceder a las rutas sera /adb/la ruta a la que queramos ir
//ejemplo: http://127.0.0.1:8000/adb/Clientes 
//Eso nos llevara a la view de Clientes
Route::group(['middleware' => ['adb']], function(){
    // Ruta, /Clientes, donde se mostrara la pagina de Clientes
    Route::get('/Clientes', [ControladorAdmin::class, 'Clientes']);
    // Ruta, /Facturacion, donde se mostrara la pagina de Facturacion
    Route::get('/Facturacion', [ControladorAdmin::class, 'Facturacion']);
    // Ruta, /Contabilidad, donde se mostrara la pagina de Contabilidad
    Route::get('/Contabilidad', [ControladorAdmin::class, 'Contabilidad']);
});
