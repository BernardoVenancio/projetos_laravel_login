@extends('layouts.main')

@section('title','Animes')

@section('css','/css/style.css')

@section('content')

<h1>Lista de Animes já Adicionados Pelo Usuário:</h1>

@if (count($animes) == 0)
    <p style="font-weight: bold"> Nenhum Anime Adicionado Pelo Usuário</p>   
@endif
@foreach ($animes as $anime)
    <p><span class="anime">{{$anime->titulo}} -</span> {{$anime->descricao}} / <a href="/animes/{{ $anime->id}}" class="opcao">Ver Mais </a></p>
@endforeach

@endsection