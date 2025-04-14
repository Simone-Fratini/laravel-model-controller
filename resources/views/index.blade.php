<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Movie</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="h-24 bg-blue-800 flex items-center justify-center">
        <div class="text-white text-4xl">Laravel Movies from DB</div>
    </header>
    <div class="container mx-auto p-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($movies as $movie)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $movie["title"] }}</h2>
                        <p class="text-gray-600 mb-2">
                            <span class="font-semibold">Original Title:</span> 
                            {{ $movie["original_title"] }}
                        </p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-sm text-gray-500">
                                {{ $movie["date"] }}
                            </span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">
                                ⭐ {{ $movie["vote"] }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>