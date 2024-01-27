@extends('template')

@section('titulo')
Cliente - Novo
@endsection

@section('conteudo')
<h1>Novo cliente</h1>
<x-forms.form :inputs-data="$form" :link="route('clientes_novo')"/>
@endsection