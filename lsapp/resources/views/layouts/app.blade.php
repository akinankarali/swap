<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <title>{{config('app.name', 'SWAP')}}}</title>
</head>
<body style="    background-image: url('https://images.wallpaperscraft.com/image/table_office_flowers_113857_1920x1080.jpg');
                background-size: cover;
                background-position: center center;
">
    @include('inc.navbar')
    <div class="container">
            @yield('content')
    </div>
</body>
</html>
