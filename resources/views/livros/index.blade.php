<p><a href="{{route('livros.create')}}">Inserir novo livro</a></p>
<hr>

<div>
    <form method="POST" action="{{ route('livros.search')}}">
        @csrf
        <p>Buscar: </p>
        <input type="text" name="search" id="search" placeholder="Digite sua busca">
        <button type="submit">Buscar</button>
    </form>
</div>
<hr>

@if (session('message'))
    <div>
        {{session('message')}}
    </div>
@endif

<h1>Lista de Livros</h1>

@foreach ($livros as $livro)
    <p>
        <img src="{{url("storage/{$livro->capa}")}}" alt="{{$livro->titulo}}" style= "max-width: 100px">
        <br>{{$livro->titulo}}
        <a href="{{route('livros.show', $livro->id)}}"> [Ver detalhes]</a>
        <a href="{{route('livros.edit', $livro->id)}}"> [Editar]</a>
    </p>
@endforeach

@if (isset($filters))
    {{$livros ->appends($filters)->links()}}
@else
    {{$livros -> links() }}
@endif

<p><a href="{{route('home')}}">Voltar para pagina inicial</a></p>
