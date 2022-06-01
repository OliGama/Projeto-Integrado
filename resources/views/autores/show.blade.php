<h1>Detalhes do Autor {{$autors->nome}}</h1>

<ul>
    <li>Nome: {{$autors->nome}}</li>
    <li>Pais: {{$autors->pais}}</li>
    <li>Ano de nascimento: {{$autors->ano_nasc}}</li>
    <li>Area: {{$autors->area}}</li>
</ul>

<form action="{{route ('autores.destroy', $autors->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar o autor {{$autors->nome}}</button>
</form>
<p><a href="{{route('autores.index')}}">Voltar para pagina inicial</a></p>
