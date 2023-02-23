<?php

use Illuminate\Support\Facades\Route;
use inertia\inertia;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/contacto', function () {
    return Inertia::render('Contact');
});

Route::get('/nosotros', function () {
    return Inertia::render('Nosotros');
});

/* Aqui se crea la ruta de usuarios es decir como pondremos en el buscador la url
posteriormente retornaremos usando inertia la vista Users.vue la cual pedira
componentes y propiedades es decir el componente sera la funcion que se realisa en vue
que posteriormente se invoca y las propiedades son aquellas que llamamos como del id que
se tienen que invocar en forma de array. */
Route::get('/usuarios', function () {
    return Inertia::render('Users', [
        'usuarios' => User::all()->makeHidden([
            'id',
            'created_at',
            'updated_at',
            'email_verified_at'
        ]),
    ]);
});