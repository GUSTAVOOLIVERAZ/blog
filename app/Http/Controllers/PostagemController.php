<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PostagemController

use App\Http\Controllers\Controller;

use App\Models\Categoria;

use App\Models\Postagem;


use Illuminate\Http\Request;

class PostagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postagens = Postagem::orderBy('titulo','ASC')->get();
       return view('postagem.index',compact('postagens'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('postagem.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'titulo.required' => 'O titulo é um campo obrigatório!',
        ];
    
        $validated = $request->validate([
            'titulo' => 'required|min:5',
        ], $messages);
    
        $postagem = new Postagem();
        $postagem->titulo = $request->titulo;
        $postagem->save();
    
        return redirect()->route('postagem.index')->with('message', 'Postagem criada com sucesso!');

    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $postagem= Postagem:: find($id);
        return view('postagem.show', compact('postagem'));    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $postagem = Postagem::find($id);
        return view('postagem.edit', compact('postagem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'titulo.required' => 'O titulo é um campo obrigatório!',
        ];
    
        $validated = $request->validate([
            'titulo' => 'required|min:5',
        ], $messages);

        $postagem = Postagem::find($id);
        $postagem->titulo = $request->titulo;
        $postagem->save();

        return redirect()->route('postagem.index')->with('message', 'Postagem ATUALIZADA com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $postagem = Postagem::find($id);
        $postagem->delete();

return redirect()->route('postagem.index')->with('message', 'Postagem excluída com sucesso!');

    }
}
