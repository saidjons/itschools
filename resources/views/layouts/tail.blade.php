<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>{{$title ?? "ITschools.uz"}}</title>
    @stack('css')
    <style>
    
    </style>
</head>
<body>
    @include('tui.partials.nav')
    @section('content')
        
    @show

    <script src="/js/app.js"></script>
    @stack('js')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>

</body>
</html>