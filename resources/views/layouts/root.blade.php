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

    <!-- Header -->
    <header class="text-center">
        <h1>
            Explore The Beautiful World
            <br>
            As Easy One Click
        </h1>
        <p class="mt-4">
            You will see beautiful
            <br>
            moment you never see before
        </p>
        <a href="#" class="btn btn-get-started px-4 mt-4">Get Started</a>
    </header>

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