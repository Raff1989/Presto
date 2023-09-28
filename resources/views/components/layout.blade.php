<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title?? 'Presto.it'}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/x-icon" href="/img/P.png">
    @livewireStyles  
    <script src="https://kit.fontawesome.com/076ab933f6.js" crossorigin="anonymous"></script>
</head>
<body>
    
<x-navbar />

<div class="min-vh-100">
    {{$slot}}
</div>

<x-footer />


@livewireScripts
</body>
</html>