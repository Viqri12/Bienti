<!doctype html>
<html lang="en">
  <head>
    @include('layouts.LP.head')
  </head>
  <body style="overflow: auto">

    {{-- navbar content --}}
    
    {{-- close navbar content --}}

    @yield('content')

    {{-- main content --}}
    {{-- close main content --}}

    {{-- @include('layouts.LP.footer') --}}

    @include('layouts.script')
  </body>
</html>
