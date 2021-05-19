<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @stack('style-before')
    @include('includes.root.style')
    @stack('style-after')

    <title>@yield('title')</title>
</head>
<body>

    <!-- Navbar -->
    @include('includes.root.navbar')

    <!-- Main Contain -->
    <main>

        @yield('content')

    </main>

    @include('includes.root.footer')

    @stack('script-before')
    @include('includes.root.script')
    @stack('script-after')
</body>
</html>