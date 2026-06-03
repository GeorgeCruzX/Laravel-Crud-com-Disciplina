<div>
    <h1>Nova Disciplina</h1>
    <form action="{{ route('disciplina.store') }}" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="Nome da Disciplina" />
        <input type="number" name="carga_horaria" placeholder="Carga Horária" />
        <input type="submit" value="Salvar">
        <a href="{{ route('disciplina.index') }}">Voltar</a>
    </form>
</div>
