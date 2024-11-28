<form action="{{ url(path: 'produtos/'.$produtos->id) }}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="nome" placeholder="Nome do Produto" required>
    <input type="float" name="preco" placeholder="Preço do Produto" required>
    <input type="integer" name="quantidade" placeholder="Quantidade do Produto" required>
    <input type="text" name="categoria" placeholder="Descrição da categoria" required>
    <button type="submit">Editar Produto</button>
</form>