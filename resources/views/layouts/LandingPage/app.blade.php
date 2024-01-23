<!doctype html>
<html lang="en">
  <head>
    @include('layouts.LandingPage.head')
  </head>
  <body >
  
     
      @include('layouts.LandingPage.navbar')
      {{-- @include('layouts.dashboard.sidebar') --}}

      @yield('content')


   
    @include('layouts.LP.footer')

    @include('layouts.LandingPage.script')
  </body>
</html>
