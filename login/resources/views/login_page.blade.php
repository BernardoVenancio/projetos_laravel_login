@extends('layouts.main')

@section('title','Login')

@section('css','/css/login.css')

@section('content')
<form>
    <fieldset>
        <h1>Login</h1>
        <label for="login" hidden>Login:</label>
        <input type="text" name="login" id="login" placeholder="Digite seu Login: ">
        <label for="senha" hidden >Senha:</label>
        <input type="password" name="senha" id="senha" placeholder="Digite sua Senha: ">
        <button type="submit">Entrar</button>
        <a href="/waifus" class="button">Cadastrar</a>
    </fieldset>
    
</form>


@endsection

@section('footer','hidden')