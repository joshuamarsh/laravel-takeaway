<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  <link src="{{ mix('/js/app.js') }}">
  <title>@yield('title')</title>
</head>
<body>
  <header>
    <nav class="navmenu">
      <a href="/"><img class="logo" src="/images/logo.png" alt=""></a>
      <div class="navspacer"></div>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/order">Order</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/login">Login</a></li>
      </ul>
    </nav>
  </header>
  @yield('content')

</body>
</html>