@foreach($produtos as $produto)
<div>
    Nome: {{ $produto->nome }}
    <a href="{{ route('produtos_exibir', [ 'slug' => $produto->slug ]) }}">
        <img src="{{ $produto->caminho }}" width="50">
    </a>
</div>
@endforeach