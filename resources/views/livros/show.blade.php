<h1>Detalhes do livro {{$livro->titulo}}</h1>

<ul>
    <li>ISBN: {{$livro->isbn}}</li>
    <li>ano: {{$livro->ano}}</li>
    <li>idioma: {{$livro->idioma}}</li>
    <li>Capa:<br><img src="{{url("storage/{$livro->capa}")}}" alt="{{$livro->titulo}}" style= "max-width: 100px"></li>
    <li>Editora: {{$livro->editora->nome}}</li>
    @if ($livro->midia)
        <li>MIDIA</li>
        <li>Nome de midia: {{$livro->midia->nome}}</li>
        <li>Descricao de midia: {{$livro->midia->descricao}}</li>
    @endif
</ul>

<form action="{{route ('livros.destroy', $livro->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar o livro {{$livro->titulo}}</button>
</form>
<p><a href="{{route('home')}}">Voltar para pagina inicial</a></p>
