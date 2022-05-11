<h1>Detalhes do livro {{$livro->titulo}}</h1>

<ul>
    <li>ISBN: {{$livro->isbn}}</li>
    <li>ano: {{$livro->ano}}</li>
    <li>idioma: {{$livro->idioma}}</li>
</ul>

<form action="{{route ('livros.destroy', $livro->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar o livro {{$livro->titulo}}</button>
</form>
