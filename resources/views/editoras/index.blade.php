<p><a href="{{route('editoras.create')}}">Inserir nova Editora</a></p>
<hr>

<div>
    <form method="POST" action="{{ route('editoras.search')}}">
        @csrf
        <p>Buscar: </p>
        <input type="text" name="search" id="search" placeholder="Digite a Editora">
        <button type="submit">Buscar</button>
    </form>
</div>
<hr>

@if (session('message'))
    <div>
        {{session('message')}}
    </div>
@endif

<h1>Lista de Editoras</h1>

@foreach ($editoras as $editora)
    <p>
        {{$editora->nome}}
        <a href="{{route('editoras.show', $editora->id)}}"> [Ver detalhes]</a>
        <a href="{{route('editoras.edit', $editora->id)}}"> [Editar]</a>
    </p>
@endforeach

@if (isset($filters))
    {{$editoras ->appends($filters)->links()}}
@else
    {{$editoras -> links() }}
@endif
