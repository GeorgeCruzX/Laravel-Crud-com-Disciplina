<div>
    <h1>Informações Adicionais da Disciplina</h1>
    <h3>ID: {{ $disciplina->id }}</h3>
    <h3>Nome: {{ $disciplina->nome }}</h3>
    <h3>Carga Horária: {{ $disciplina->carga_horaria }}</h3>
    <a href="{{ route('disciplina.index') }}">Voltar</a>
</div>
