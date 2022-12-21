<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- <link rel="icon" href="./favicon.ico" /> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', 'Welcome')</title>
  <!-- Styles -->
  @vite('resources/js/app.js')
</head>
<body>


<body>

  @include('partials.header')
  <!-- /header -->
  <main>
    @yield('content')
  </main>
  <!-- /main -->
  @include('partials.footer')
  <!-- /footer -->

</body>


</body>
</html>