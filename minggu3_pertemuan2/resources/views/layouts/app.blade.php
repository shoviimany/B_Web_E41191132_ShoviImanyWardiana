<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}}</title>
</head>
<body>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
        @yield('content')
    </div>
   </div>       
</body>
</html>