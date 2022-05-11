Lista de autores
@foreach ($autores as $autor)
    <p>Nome: {{ $autor->nome }}</p>
    <p>Pais: {{ $autor->pais }}</p>
    <p>Ano de nascimento: {{ $autor->ano_nasc }}</p>
    <p>Area: {{ $autor->area }}</p>
    <hr>
@endforeach
