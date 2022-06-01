<p><a href="{{route('autores.create')}}">Inserir novo Autor</a></p>
<hr>

<div>
    <form method="POST" action="{{ route('autores.search')}}">
        @csrf
        <p>Buscar: </p>
        <input type="text" name="search" id="search" placeholder="Digite o Autor">
        <button type="submit">Buscar</button>
    </form>
</div>
<hr>

@if (session('message'))
    <div>
        {{session('message')}}
    </div>
@endif

<h1>Lista de Autores</h1>

@foreach ($autors as $autor)
    <p>
        {{$autor->nome}}
        <a href="{{route('autores.show', $autor->id)}}"> [Ver detalhes]</a>
        <a href="{{route('autores.edit', $autor->id)}}"> [Editar]</a>
    </p>
@endforeach

@if (isset($filters))
    {{$autors ->appends($filters)->links()}}
@else
    {{$autors -> links() }}
@endif
