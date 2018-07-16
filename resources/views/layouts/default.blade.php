<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/font-icons.css" />
    <link rel="stylesheet" href="/css/sliders.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/responsive.css" />
    <link rel="stylesheet" href="/css/spacings.css" />
    <link rel="stylesheet" href="/css/animate.min.css" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400%7COpen+Sans:400,400i,700%7CLibre+Baskerville:400i' rel='stylesheet'>
  </head>
  <body>
    @include('layouts._header')

    <div class="container">
      <div class="col-md-offset-1 col-md-10">
         @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>

<script src="/js/app.js"></script>
<!-- jQuery Scripts -->
<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('js/plugins.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('js/scripts.js') }}"></script>



 </body>
</html>