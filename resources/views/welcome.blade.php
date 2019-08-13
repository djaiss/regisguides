<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <title>Laravel</title>
</head>

<body>
  <div class="ph2 ph0-ns" id="app">
    <div class="cf mt4 mw7 center br3 mb3">
      <ul class="list pa0 mb0 tc">
        <li class="di mr3">
          <a href="">About Regis</a>
        </li>
        <li class="di mr3">
          <a href="">Twitter</a>
        </li>
        <li class="di">
          <a href="">RSS feed</a>
        </li>
      </ul>
    </div>
  </div>

  <div class="ph2 ph0-ns">
    <div class="cf mt4 mw7 center br3 mb3">
      @yield('content')
    </div>
  </div>
</body>

</html>
