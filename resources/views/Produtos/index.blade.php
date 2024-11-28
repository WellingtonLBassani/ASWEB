@foreach($produtos as $produto)
    <div>
        <h3>{{ $produto->nome }}</h3>
        <span>{{$produto->preco}}</span>
        <span>{{$produto->quantidade}}</span>
        <a href="{{ url('produtos/'.$produto->id.'/edit') }}">Edit</a>
        <form action="{{ url('produtos/'.$produto->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar produtos</button>
        </form>
    </div>
@endforeach