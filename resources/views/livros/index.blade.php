<p><a href="{{route('livros.create')}}">Inserir novo livro</a></p>
<hr>
@if (session('message'))
    <div>
        {{session('message')}}
    </div>
@endif

<h1>Lista de Livros</h1>

@foreach ($livros as $livro)
    <p>
        {{$livro->titulo}}
        <a href="{{route('livros.show', $livro->id)}}"> [Ver detalhes]</a>
        <a href="{{route('livros.edit', $livro->id)}}"> [Editar]</a>
    </p>
@endforeach
