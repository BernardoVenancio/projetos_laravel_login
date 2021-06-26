@extends('layouts.main')

@section('title',$anime->titulo)

@section('css','/css/style.css')

@section('content')

<h1>{{$anime->titulo}}</h1>
<ul>
    <li>Ano de Lançamento: {{$anime->ano}}</li>
    <li>Descrição: {{$anime->descricao}}</li>
    <li>Quantidade de Episódios: {{$anime->episodios}}</li>
    @if ($anime->concluido == 0)
        <li>Status do Anime: Conclúido</li>
    @else
        <li>Status do Anime: Em Lançamento</li>
    @endif
</ul>

@endsection