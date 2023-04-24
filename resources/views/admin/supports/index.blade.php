<h1>Listagem dos suportes</h1>

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
                <td>{{ $support->subject }}</td>
                <td>{{ $support->body }}</td>
                <td>-</td>
            </tr>
        @endforeach
    </tbody>
</table>

