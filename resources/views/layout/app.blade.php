<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" hreF="/css/fontawesome/all.min.css">
    <script href="/js/fontawesome/all.min.js" defer></script>
</head>
<body>
    @include("layout.navigation")
    @include("layout.header")
    <div class="app">
        @yield('content')
    </div>
    @include("layout.footer")
</body>
</html>
