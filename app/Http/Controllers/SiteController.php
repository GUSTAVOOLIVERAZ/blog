<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Postagem;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index(){
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view('welcome', compact('categorias'));


        
    }
    
}
