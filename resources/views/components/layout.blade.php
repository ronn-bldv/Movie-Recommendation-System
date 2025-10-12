<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Movie Recommendation System' }}</title>
    @include('partials.links')
    <style>
        body {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            font-family: "Oswald", sans-serif;
            color: #fff;
        }
    </style>
</head>
<body>
    @include('partials.includes.header')
    <div class="flex justify-center items-center min-h-screen">
        {{ $slot }}
    </div>
</body>
</html>
