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
        $postagens = Postagem::orderBy('created_at', 'DESC')->paginate(10);
        return view('welcome', compact('categorias', 'postagens'));
         }

    public function PostagemByCategoriaId($id){
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $postagens = Postagem::where('categoria_id', $id)->orderBy('created_at', 'DESC')->paginate(10);
        return view('welcome', compact('categorias', 'postagens'));
    }
    
}
