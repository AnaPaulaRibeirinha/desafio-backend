<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Filme</title>
    <link rel="stylesheet" href="{{ asset('../css/app.css') }}">
</head>
<body class="bg-zinc-950 text-zinc-50">
    <div class="max-w-screen-lg mx-auto px-4 py-4 lg:py-8">
        <div class="text-center">
            <h1 class="text-3xl font-bold">{{ $film->title }}</h1>
            <img src="{{ $film->cover }}" alt="{{ $film->title }}" class="mx-auto my-4 rounded-lg">
            <p class="text-lg">{{ $film->summary }}</p>
        </div>
    </div>
</body>
</html>