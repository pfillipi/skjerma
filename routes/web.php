<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Psr\Http\Message\ServerRequestInterface;

use App\Http\Controllers\PagesController;

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

// Route::get('/hallo', function () {
//     return '<h1>Hei verden!</h1>';
// });

// Route::get('/users/{id}/{name}', function($id, $name){
//     return 'This is user '.$name.' with an id of '.$id;
// });

// Route::get('/form', function () {
//     return view('form');
// });

// Route::get('/header', function () {
//     return view('header');
// });

// Route::get('/for', function () {
//     return view('for');
// });

// Route::get('/fo', function () {
//     return view('fo');
// });

// Route::post('/submit', function (ServerRequestInterface $request) {
//     $name = $request->input('firstname');

// //    return ($name);
//     return view('fo');
// });

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);

Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/services', function(){
    return view('pages.services');
});