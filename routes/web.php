<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\domain;

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

// Ruta de inicio
Route::get('/', function () {
    return view('home');
});

// Ruta de servicio de desarrollo web
Route::get('/web-development', function () {
    return view('web-development');
})->name('web-development');

// Ruta de sobre nosotros
Route::get('/about', function () {
    return view('about');
})->name('about');

// Ruta de mesa de ayuda
Route::get('/helpdesk', function () {
    return view('helpdesk');
})->name('helpdesk');

// Ruta de preguntas frecuentes
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Ruta de documentación
Route::get('/doc', function () {
    return view('doc');
})->name('doc');

// Ruta de contacto
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Ruta de blog
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

// Ruta de Revendedor
Route::get('/reseller', function () {
    return view('reseller');
})->name('reseller');

// Ruta de herramientas para desarrolladores
Route::get('/tools', function () {
    return view('tools');
})->name('tools');

// Ruta de trabaja con nosotros
Route::get('/work', function () {
    return view('work');
})->name('work');

// Ruta de resultados de búsqueda
Route::get('/search', function () {
    return view('search');
})->name('search');
