<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Velkommen til Laravel!'
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = 'Om oss!'
        return view('pages.about')->with('title', $title);
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['webdesign', 'programmering', 'Søkemotoroptimalisering']
        );
        $title= 'Tjenester!'
        return view('pages.services')->with($data);
    }
}