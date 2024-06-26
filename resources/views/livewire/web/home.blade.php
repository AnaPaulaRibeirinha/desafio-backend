<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Filmes</title>
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('../css/app.css') }}">
</head>
<body>
    <div>
        <h1>Listagem de Filmes</h1>

        
        {{-- <a href="{{ route('films.create') }}" class="btn btn-primary mb-3">Cadastrar Filme</a> --}}

        <div class="film-grid">
            @foreach($films as $film)
                <div class="film-card">
                    <img src="{{ $film->cover }}" alt="{{ $film->title }}" class="film-cover">
                    <h2 class="film-title">{{ $film->title }}</h2>
                    <p class="film-summary">{{ $film->summary }}</p>
                   
                    {{-- <a href="{{ route('films.show', $film->id) }}" class="btn btn-info">Ver Detalhes</a> --}}
                </div>
            @endforeach
        </div>
        {{ $films->links() }}
    </div>
</body>
</html>
