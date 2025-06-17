<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=n, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <nav>
        <x-nav-link href="/" active="home">
            home
        </x-nav-link >
        <x-nav-link href="/about">
            about
        </x-nav-link>
        <x-nav-link href="/contact">
            Contact
        </x-nav-link>
        <x-nav-link href="/data">
            Data
        </x-nav-link>
    </nav>
    <main>
        {{ $slot }}
    </main>
    <footer>
        Ini footer dari page <span>{{ $footer }}</span>
    </footer>
</body>

</html>
