<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
  <title>Rese</title>
</head>
<style>

</style>
<body>
  <div class="container">
    <h1>@yield('title')</h1>
    <div>
      @yield('content')
    </div>
  </div>
</body>
</html>