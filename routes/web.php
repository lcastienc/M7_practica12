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

//Añadimos name() para asignar un alias al Route de la raiz que luego sera
//utilizado en las views para crear una redireccion de las views al welcome
Route::get('/', function () {
    return view('welcome');
})-> name('Bienvenidos');

