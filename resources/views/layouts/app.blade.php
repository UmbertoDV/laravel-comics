<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }}</title>
  @vite('resources/js/app.js')
</head>

<body>
  @include('partials._header')
  <h1>Template Title</h1>
  <span>Testo:</span>
  <p>@yield('paragrafo_principale')</p>
</body>

</html>