<div>
    <h1>Alterar Disciplina</h1>
    <form action="{{ route('disciplina.update', $disciplina->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nome" placeholder="Nome da Disciplina" value="{{ $disciplina->nome }}" />
        <input type="number" name="carga_horaria" placeholder="Carga Horária" value="{{ $disciplina->carga_horaria }}" />
        <input type="submit" value="Salvar">
        <a href="{{ route('disciplina.index') }}">Voltar</a>
    </form>
</div>
