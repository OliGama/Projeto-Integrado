<h1>Cadastrar novo livro</h1>
<div>
    <form method="post" action="{{route('livros.store')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <p>Titulo: <input type="text" name="titulo" id="titulo" placeholder="Digite um titulo" value = "{{old('titulo')}}"></p>
        <p>Ano: <input type="text" name="ano" id="ano" placeholder="Digite um ano" value = "{{old('ano')}}"></p>
        <p>Idioma: <input type="text" name="idioma" id="idioma" placeholder="Digite um idioma" value = "{{old('idioma')}}"></p>
        <p>ISBN: <input type="text" name="isbn" id="isbn" placeholder="Digite ISBN" value = "{{old('isbn')}}"></p>
        <p><button type="submit">Enviar</button></p>
    </form>
</div>


