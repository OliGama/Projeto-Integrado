<h1>Cadastrar novo livro</h1>
<div>
    <form method="post" action="{{route('livros.store')}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <p>Titulo: <input type="text" name="titulo" id="titulo" placeholder="Digite um titulo" value = "{{old('titulo')}}"></p>
        <p>Ano: <input type="text" name="ano" id="ano" placeholder="Digite um ano" value = "{{old('ano')}}"></p>
        <p>Idioma: <input type="text" name="idioma" id="idioma" placeholder="Digite um idioma" value = "{{old('idioma')}}"></p>
        <p>ISBN: <input type="text" name="isbn" id="isbn" placeholder="Digite ISBN" value = "{{old('isbn')}}"></p>
        <p>Capa: <input type="file" name="capa" id="capa"></p>
        <p>Editora: </p>
        <select name="editora_id" id="editora_id">
            @foreach ($editoras as $editora)
            <option value="{{ $editora->nome }}">{{ $editora->nome }}</option>
            @endforeach
        </select>
        <p><button type="submit">Enviar</button> </p>
    </form>
    {{-- <form action="{{route('midias.store')}}" method="post">
        <p>Midia: <input type="text" name="midia" id="midia" placeholder="Digite uma midia"></p>
        <p><button type="submit">Enviar</button> </p>
    </form> --}}
    <p><a href="{{route('home')}}">Voltar para pagina inicial</a></p>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
