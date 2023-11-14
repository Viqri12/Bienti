<!doctype html>
<html lang="en">
  <head>
    @include('layouts.dashboard.head')
  </head>
  <body>
      
      @include('layouts.dashboard.sidebar')
      
      <main class="content">
        @include('layouts.dashboard.navbar')
    
        @yield('content')

        @include('layouts.dashboard.footer')
      </main>

  


    @include('layouts.dashboard.script')
  </body>
</html>
