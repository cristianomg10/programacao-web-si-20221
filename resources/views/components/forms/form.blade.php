<form method="post" action="{{ $link }}">
    @csrf
    @foreach ($inputsData as $i)
        <x-forms.input type="{{ $i['type'] }}" name="{{ $i['name'] }}" label="{{ $i['label'] }}"/><br>
    @endforeach

    <input type="submit" value="Enviar">
</form>