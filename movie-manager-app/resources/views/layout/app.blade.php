<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- DaisyUI x Tailwind CSS -->
        <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>

        <title>@yield('title')</title>
    </head>

    <body>

        <div>
            @include('includes.header')

            <main>
                @yield('content')
            </main>

            @include('includes.footer')
        </div>

    </body>
</html>
