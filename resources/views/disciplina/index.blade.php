<div>
    <h1>Disciplinas Cadastradas</h1>
    <a href="{{ route('disciplina.create') }}">Nova Disciplina</a>

    <table style="width: 100%">
        <thead>
            <th>ID</th>
            <th>NOME</th>
            <th>CARGA HORÁRIA</th>
            <th>AÇÕES</th>
        </thead>
        <tbody>
            @foreach ($data as $disciplina)
                <tr>
                    <td style="text-align: center;">{{ $disciplina->id }}</td>
                    <td style="text-align: center;">{{ $disciplina->nome }}</td>
                    <td style="text-align: center;">{{ $disciplina->carga_horaria }}</td>
                    <td style="text-align: center;">
                        <a href="{{ route('disciplina.show', $disciplina->id) }}">Mais Info</a>
                        <a href="{{ route('disciplina.edit', $disciplina->id) }}">Editar</a>
                        <form action="{{ route('disciplina.destroy', $disciplina->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Remover">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
