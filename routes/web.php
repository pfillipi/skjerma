<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Psr\Http\Message\ServerRequestInterface;

use App\Http\Controllers\PagesController;
use App\Models\Article;

Route::get('/', function(){
    return view('pages.index');
});

Route::get('/create', function(){
    return view('create');
});

Route::post('/create', function(){
    Article::create([
        'title' => request('title'),
        'body' => request('body'),
    ])
});