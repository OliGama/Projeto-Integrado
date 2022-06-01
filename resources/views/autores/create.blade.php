<h1>Cadastrar novo Autor</h1>
<div>
    <form method="post" action="{{route('autores.store')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <p>Nome: <input type="text" name="nome" id="nome" placeholder="Digite um nome" value = "{{old('nome')}}"></p>
        <p>Pais: <input type="text" name="pais" id="pais" placeholder="Digite um pais" value = "{{old('pais')}}"></p>
        <p>Ano de nascimento: <input type="text" name="ano_nasc" id="ano_nasc" placeholder="Digite um ano" value = "{{old('ano_nasc')}}"></p>
        <p>Area: <input type="text" name="area" id="area" placeholder="Digite a area" value = "{{old('area')}}"></p>
        <p><button type="submit">Enviar</button> </p>
        <p><a href="{{route('autores.index')}}">Voltar para pagina inicial</a></p>
    </form>
</div>
