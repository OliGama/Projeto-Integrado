<h1>Editar a Editora {{$editoras->nome}}</h1>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach

@endif

<div>
    <form method="post" action="{{route('editoras.update', $editoras->id)}}">
        @method('put')
        @csrf
        <p>Nome: <input type="text" name="nome" id="nome" placeholder="Digite um nome" value = "{{$editoras->nome}}"></p>
        <p>Local: <input type="text" name="local" id="local" placeholder="Digite um local" value = "{{$editoras->local}}"></p>
        <p>Site: <input type="text" name="site" id="site" placeholder="Digite um site" value = "{{$editoras->site}}"></p>
        <p>Email: <input type="text" name="email" id="email" placeholder="Digite uma email" value = "{{$editoras->email}}"></p>
        <p><button type="submit">Enviar</button> </p>
        <p><a href="{{route('editoras.index')}}">Voltar para pagina inicial</a></p>
    </form>
</div>
