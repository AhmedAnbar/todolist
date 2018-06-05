<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MLM Todo - @yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">
      <div class="row" style="margin-top: 2rem;">
        <div class="col-md-8 col-lg-8">
          @include('inc.messages')
          @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
          @include('inc.sidebar')
        </div>
        </div>
      </div>
    </div>
    <footer id="footer" class="text-center">copyright 2018 &copy; MLM</footer>
  </body>
</html>
