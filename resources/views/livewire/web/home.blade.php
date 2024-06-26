<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Filmes</title>
    <link rel="stylesheet" href="{{ asset('app/public/css/app.css') }}">
</head>
<body>
    <div>
        <h1>Listagem de Filmes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Resumo</th>
                    <th>Capa</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($films as $film)
                    <tr>
                        <td>{{ $film->title }}</td>
                        <td>{{ $film->summary }}</td>
                        <td><img src="{{ $film->cover }}" alt="{{ $film->title }}"></td>
                        <td>
                            <a href="{{ route('films.show', $film->id) }}" class="btn btn-info">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $films->links() }}
    </div>
</body>
</html>
