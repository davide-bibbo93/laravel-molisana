{{-- LAYOUT PAGE --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>laravel-molisana</title>
  </head>
  <body>

    <div id="app">

      <header>
        @include('partials.header')
      </header>

      <main>

        @yield('content')

      </main>

      <footer>
        @include('partials.footer')
      </footer>

    </div>

  </body>
</html>
