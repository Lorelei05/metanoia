<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;



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


Route::get('/', function() {
    return view('uno');
})->name('welcome.index');


Route::get('/uno', function() {
    return view('welcome');
})->name('welcome.index');



Route::get('/app', function() {
    return view('app');
})->name('app.index');


Route::get('/welcome', function() {
    return view('login');
})->name('login.index');


Route::get('/login', function() {
    return view('usuario');
})->name('usuario.index');

/*Route::get('/login', function() {
    return view('login');
});



/*
Route::get('/login', function() {
    return view('login');
})->name('usuario.index');*/


//Route::get('/app', 'appController@app')->name('app.app');
//Route::get('/welcome', 'welcomeController@index')->name('welcome.index');
//Route::get('/uno', 'unoController@index')->name('uno.index');

/*Route::get('/insert', function() {
    $stuRef = metanoia('firebase.firestore')->database()->collection('usuarios')->newDocument();
    $stuRef->set([
        'contraseña'  => '',
        'correo' => '',
        'edad'  => '',
        'nombre' => '',
        'peso'  => '',
        'matricula' => '' 
    ]);
    echo "<h1>".'inserted'."</h1>";
});*/