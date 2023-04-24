<h1>Listagem dos suportes</h1>

<h2><a href="{{ route('supports.create') }}">Nova dúvida</a></h2>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descricao</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($supports as $support )
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td><a href="{{ route('supports.show', $support->id) }}">Ver</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>

