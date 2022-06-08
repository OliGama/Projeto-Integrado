<h1>Detalhes da Editora {{$editoras->nome}}</h1>

<ul>
    <li>Nome: {{$editoras->nome}}</li>
    <li>Local: {{$editoras->local}}</li>
    <li>Site: {{$editoras->site}}</li>
</ul>

<form action="{{route ('editoras.destroy', $editoras->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar a Editora {{$editoras->nome}}</button>
</form>
<p><a href="{{route('editoras.index')}}">Voltar para pagina inicial</a></p>
