@extends('layout')
@section('titulo')
@endsection

@section('nav')
@endsection

@section('menu')
@endsection


@section('conteudo')
<h1>Bla bla bla</h1>
<form al method="post" action="{{route('processar.form')}}">
    @csrf
    <label for="nome"><h1>Nome</h1></label>
    <input type="text" name="nome">
    <br>

    <label for="morada"><h1>Morada</h1></label>
    <input type="text" name="morada">
    <br>

    <label for="telemovel"><h1>Telemovel</h1></label>
    <input type="text" name="telemovel">
    <br>

    <br>
    <button type="submit">Enviar</button>
</form>

@endsection

@section('rodapé')
@endsection
