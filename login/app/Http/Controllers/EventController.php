<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Anime;

class EventController extends Controller
{
    public function index(){
        return view('/animes/welcome');
    }

    public function listar_animes(){

        $animes = Anime::all();

        return view('/animes/melhores_animes',['animes' => $animes]); 
    }

    public function adicionar_animes(){

        $animes = Anime::all();

        return view('/animes/adicionar_animes',['animes' => $animes]); 
    }

    public function store(Request $request)
    {
        $anime = new Anime;

        $anime->titulo = $request->titulo;
        $anime->ano = $request->ano;
        $anime->descricao = $request->descricao;
        $anime->episodios = $request->episodios;
        $anime->concluido = $request->concluido;

        $anime->save();

        return redirect('/animes/listar')->with('msg','Anime Adicionado com Sucesso à Sua Lista');

    }

    public function show($id){
        $animes = Anime::findOrFail($id);
        return view('animes.show',['anime' => $animes]);
    }

    public function inicial(){
        return view('welcome');
    }
}