<h1>Editar o livro {{$livro->titulo}}</h1>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach

@endif

<div>
    <form method="post" action="{{route('livros.update', $livro->id)}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <p>Titulo: <input type="text" name="titulo" id="titulo" placeholder="Digite um titulo" value = "{{$livro->titulo}}"></p>
        <p>Ano: <input type="text" name="ano" id="ano" placeholder="Digite um ano" value = "{{$livro->ano}}"></p>
        <p>Idioma: <input type="text" name="idioma" id="idioma" placeholder="Digite um idioma" value = "{{$livro->idioma}}"></p>
        <p>ISBN: <input type="text" name="isbn" id="isbn" placeholder="Digite ISBN" value = "{{$livro->isbn}}"></p>
        <p>Editar capa: <input type="file" name="capa" id="capa" value="{{$livro->capa}}"></p>
        <img src="{{url("storage/{$livro->capa}")}}" alt="{{$livro->titulo}}" style= "max-width: 100px">
        <p>Editora: <select name="editora_id" id="editora_id">
            @foreach ($editoras as $editora)
            <option value="{{ $editora->nome }}">{{ $editora->nome }}</option>
            @endforeach
        </select></p>

        <p><button type="submit">Enviar</button> </p>
        <p><a href="{{route('livros.index')}}">Voltar para pagina inicial</a></p>
    </form>
    {{-- <form action="{{route('midias.update', $livro->midia->id)}}" method="post">
        <p>MIDIA</p>
        <p>Nome da midia: <input type="text" name="nome" id="nome" value = "{{$livro->midia->nome}}"></p>
        <p>Descricao: <input type="text" name="descricao" id="descricao" value = "{{$livro->midia->descricao}}"></p>
        <p><button type="submit">Enviar</button> </p>
    </form> --}}
</div>
