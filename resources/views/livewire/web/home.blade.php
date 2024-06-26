<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Filmes</title>
    <link rel="stylesheet" href="{{ asset('../css/app.css') }}">
</head>
<body class="bg-zinc-950 text-zinc-50">
    <div class="max-w-screen-lg mx-auto px-4 py-4 lg:py-8">
        <h1 class="text-3xl font-bold text-center mb-8">Listagem de Filmes</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 justify-center">
            @foreach($films as $film)
                <div class="max-w-xs bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="{{ $film->cover }}" alt="{{ $film->title }}" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold">{{ $film->title }}</h2>
                        <p class="text-sm text-gray-600">{{ $film->summary }}</p>
                        <a href="{{ route('films.show', $film->id) }}" class="block mt-2 text-center bg-indigo-600 hover:bg-indigo-500 text-white py-2 px-4 rounded-md">Ver</a>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $films->links() }}
    </div>
</body>
</html>