@foreach($produtos as $produto) //a primeira variavel puxa a variavel do controller, 
    <div>                       //por isso é maiuscula, e a segunda é o nome da 
															  //entidade no singular, pra não se perder
															  //caso não haja plural, substituir por $entity a segunda
        <h3>{{ $produto->descricao }}</h3> 
        <p>{{ $produto->preco }}</p>
        <a href="{{ url('produtos/'.$produto->id.'/edit') }}">Edit</a>
        <form action="{{ url('produtos/'.$produto->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach