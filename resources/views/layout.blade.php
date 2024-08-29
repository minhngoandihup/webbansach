<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
   

</head>
<body>

    <header>
        <h1>@yield('title2')</h1>
    </header>

    @include('header')
    <main>
        @yield('content')
        

    </main>
    @include('footer')

</body>
</html>
