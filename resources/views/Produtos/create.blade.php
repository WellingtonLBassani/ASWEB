<form action="{{ url('produtos') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome do Produto" required>
    <input type="float" name="preco" placeholder="Preço do Produto" required>
    <input type="integer" name="quantidade" placeholder="Quantidade do Produto" required>
    <input type="text" name="categorias" placeholder="Descrição da categoria" required>
    <button type="submit">Criar Produto</button>

</form>