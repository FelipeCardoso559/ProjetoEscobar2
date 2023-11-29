@extends('templateShop.index')

@section('contents')

<h1>Produtos Disponíveis</h1>


<ul class="list-group">
    @foreach($produto as $linha)
    <li class="list-group-item">
        {{ $linha['nome'] }} - R$ {{ $linha['preco'] }} | Marca: {{ $linha['marca']}} | Produto: {{ $linha['categoria'] }}
        <form action="{{ route('carrinho.adicionar', $linha) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
        </form>
    </li>
    @endforeach
</ul>

<a href="{{ route('carrinho.index') }}">
    <button class="btn btn-primary">Ir para o carrinho</button>
</a>

@endsection
