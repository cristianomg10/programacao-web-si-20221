@extends('template')

@section('conteudo')
@routes
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Renda</th>
            <th>Operações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clientes as $c)
    <tr>
        <td>{{ $c->id }}</td>
        <td>{{ $c->nome }}</td>
        <td>{{ $c->telefone }}</td>
        <td>{{ $c->renda }}</td>
        <td>
            <x-operacoes.botoes :id="$c->id" :link-alterar="route('clientes_alterar', ['id' => $c->id])" entidade="clientes"/>
            <!--
            <x-botoes.alterar :link="route('clientes_alterar', ['id' => $c->id])"/>
            <x-botoes.excluir :id="$c->id" entidade="clientes"/>
            <a href="#" onclick="excluir({{ $c->id }})" class="btn btn-danger">Excluir</a>
            -->
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection
