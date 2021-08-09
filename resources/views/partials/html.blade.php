<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

        <title>Zone Crew@hasSection('title') - @yield('title')@endHasSection</title>
    </head>
    <body class="container-fluid">
        @yield('body')
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
