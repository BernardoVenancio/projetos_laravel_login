@extends('layouts.main')

@section('title','Animes')

@section('css','/css/style.css')

@section('content')

@section('navegar','hidden')
    
<h1>Adicionar Anime</h1>

<form action="/animes" method="POST">
    @csrf
    <fieldset id="adicionar_anime">
        <label for="titulo" class="add">Titulo:</label>
        <input type="text" class="add" id="titulo" name="titulo" placeholder="Digite o Título">
        <label for="ano" class="add">Ano de Lançamento:</label>
        <input type="number" class="add" id="ano" name="ano" placeholder="Digite o Ano de Lançamento">
        <label for="descricao" class="add">Descrição:</label>
        <textarea name="descricao" id="descricao" class="add" placeholder="Digite A Descrição"></textarea>
        <label for="episodios" class="add">Episodios:</label>
        <input type="number" class="add" id="episodios" name="episodios" placeholder="Digite a Qtd de Episodios">
        <label for="concluido" class="add">Já foi Finalizado?</label>
        <select name="concluido" id="concluido" class="add">
            <option value="0" class="add">Sim</option>
            <option value="1" class="add">Não</option>
        </select>
        <input type="submit" value="Criar Anime" class="enviar">
    </fieldset>
</form>
@endsection