{{-- <!-- php artisan serve -->
<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body>
    <h1>

        Tis is First 
    </h1>
    <a href="/hello/qw">Hello</a>
    <a href="{{ route('about'); }}">About lpage</a>

    {{ 'Hello world' }}
    <br><br>
    @php
    $name = 'Bharat jangir';
    $collection = ['Bharart', 'Jangir','Jaipur', 'Rajasthan'];
    @endphp
    {{ $name }}
    <br><br>

    <ul>
    @foreach ($collection as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>

@include('welcom', ['nam'=>$collection])
@includeIf('view.name')
</body>
</html> --}}