<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
  @include('partials._head')
  @include('partials._stylesheets')
  <link rel="icon" type="image/png" href="http://imgur.com/I8m5nll.png" sizes="32x32">
</head>
  <body class="bodyEm">

    {{-- @include('partials._nav') --}}

    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          @include('partials._messages')
          @yield('content')
        </div>
      </div>
    </div><!-- end of .container -->

    {{-- @include('partials._footer') --}}
    
    <!--  Scripts-->
    @include('partials._javascript')
  </body>
</html>
