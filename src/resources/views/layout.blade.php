<!doctype html>
<html lang="lv">

    <head>
        <meta charset="utf-8">
        <title>PD 2 - {{ $title }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>

        <nav class="navbar bg-primary mb-3" data-bs-theme="dark">
            <header class="container">
                <a class="navbar-brand" href="#">PD2 - {{ $title }}</a>
            </header>
        </nav>

        <main class="container">
            <div class="row">
                <div class="col">

                @yield('content')

                </div>
            </div>
        </main>

        <footer class="text-bg-dark mt-3">
            <div class="container">
                <div class="row py-5">
                    <div class="col">
                        I.Avlass, 2024
                    </div>
                </div>
            </div>
        </footer>

    </body>

</html>