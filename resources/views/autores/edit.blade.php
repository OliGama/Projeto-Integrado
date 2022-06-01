<h1>Editar o autor {{$autors->nome}}</h1>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach

@endif

<div>
    <form method="post" action="{{route('autores.update', $autors->id)}}">
        @method('put')
        @csrf
        <p>Nome: <input type="text" name="nome" id="nome" placeholder="Digite um nome" value = "{{$autors->nome}}"></p>
        <p>Pais: <input type="text" name="pais" id="pais" placeholder="Digite um pais" value = "{{$autors->pais}}"></p>
        <p>Ano de nascimento: <input type="text" name="ano_nasc" id="ano_nasc" placeholder="Digite um ano" value = "{{$autors->ano_nasc}}"></p>
        <p>Area: <input type="text" name="area" id="area" placeholder="Digite uma area" value = "{{$autors->area}}"></p>
        <p><button type="submit">Enviar</button> </p>
        <p><a href="{{route('autores.index')}}">Voltar para pagina inicial</a></p>
    </form>
</div>
