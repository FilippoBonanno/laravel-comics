<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-document')</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    @include('partials.header')

    <div class="wrapper">
        @yield('content')
        
    </div>

    @include('partials.footer')

    
    
</body>
</html>