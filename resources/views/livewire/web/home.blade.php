<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Filmes</title>
    <link rel="stylesheet" href="{{ asset('../css/app.css') }}">
</head>
<body class="bg-zinc-950 text-zinc-50">
    <div>
        <h1>Listagem de Filmes</h1>
        <div class="film-grid">
            @foreach($films as $film)
                <div class="film-card">
                    <img src="{{ $film->cover }}" alt="{{ $film->title }}" class="film-cover">
                    <h2 class="film-title">{{ $film->title }}</h2>
                    <p class="film-summary">{{ $film->summary }}</p>
                    <a href="{{ route('films.show', $film->id) }}" class="bg-red-600 hover:bg-red-500 text-white py-2 px-4 rounded inline-block mt-2">Ver Detalhes</a>
                </div>
            @endforeach
        </div>
        {{ $films->links() }}
    </div>
</body>
</html>