<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title', 'My Schedule')</title>
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>

<body class="bg-dark">
  @yield('content')

  <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
