@extends('template')

@section('titulo')
Produto - Novo
@endsection

@section('conteudo')
<form action="{{ route('produtos_salvar') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">
    <label for="arquivo">Arquivo</label>
    <input type="file" name="arquivo" id="arquivo">
    <input type="submit">
</form>
@endsection