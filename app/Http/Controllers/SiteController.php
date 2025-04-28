<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $categorias = Categorias::orderBy('nome', 'ASC')->get();
        return view('welcome', compact('categorias'));


        //return view('site.index');
    }
    
}
