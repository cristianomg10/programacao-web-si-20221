<a href="#" onclick="excluir({{ $id }})" class="btn btn-danger">Excluir</a>

<script>
    function excluir(id){
        if (confirm(`Deseja realmente excluir o cliente ${id}?`)){
            location.href = route('{{ $entidade }}_excluir', {'id':id});
        }
    }
</script>