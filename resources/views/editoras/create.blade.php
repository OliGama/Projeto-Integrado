<h1>Cadastrar nova Editora</h1>
<div>
    <form method="post" action="{{route('editoras.store')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <p>Nome: <input type="text" name="nome" id="nome" placeholder="Digite um nome" value = "{{old('nome')}}"></p>
        <p>Local: <input type="text" name="local" id="local" placeholder="Digite um local" value = "{{old('local')}}"></p>
        <p>Site: <input type="text" name="site" id="site" placeholder="Digite um site" value = "{{old('site')}}"></p>
        <p><button type="submit">Enviar</button> </p>
        <p><a href="{{route('editoras.index')}}">Voltar para pagina inicial</a></p>
    </form>
</div>
