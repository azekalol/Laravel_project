<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>@yield('title-block')</title>
</head>
<body>
  @include('inc.header')
  <div id="wrap">
    @include('inc.aside')
      <div id="content">
          @yield('content')
      </div>
  </div>
  @include('inc.footer')
</body>
</html>
