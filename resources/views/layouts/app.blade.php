<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="dark">
    <link rel="shortcut icon" href="{{Vite::asset('resources/img/dc-logo.png')}}" type="image/x-icon">

    <title>DC COMICS HOME</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @include('partials.header') {{-- includo il file header --}}
    @include('partials.jumbotron')
    
    
    <main>    
        @yield('content') {{-- includo il file content --}}
    </main>
  
    @include('partials.cta')
    @include('partials.footer') {{-- includo il file footer --}}
</body>

<script>

</script>
</html>
