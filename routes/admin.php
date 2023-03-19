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

Route::group(['middleware' => ['adb']], function(){

    // Ruta, /Clientes, donde se mostrara la pagina de Clientes
    //Añadimos name() para poder asignar un alias al Route Clientes, sera visible mediantes php artisan route:list
    Route::get('/Clientes', [ControladorAdmin::class, 'Clientes']) -> name('GestionPersonas');

    // Ruta, /Facturacion, donde se mostrara la pagina de Facturacion
    //Añadimos name() para poder asignar un alias al Route Facturacion, sera visible mediantes php artisan route:list
    Route::get('/Facturacion', [ControladorAdmin::class, 'Facturacion']) -> name('GestionPapeles');

    // Ruta, /Contabilidad, donde se mostrara la pagina de Contabilidad
    //Añadimos name() para poder asignar un alias al Route Contabilidad, sera visible mediantes php artisan route:list
    Route::get('/Contabilidad', [ControladorAdmin::class, 'Contabilidad']) -> name('GestionDinero');
});
