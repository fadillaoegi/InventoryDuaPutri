<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web | {{ $tittle }}</title>
    @include('contohLayout.partials.css')
  </head>
  <body>
    

   <div class="container">
    {{-- NavBar --}}
    @include('contohLayout.partials.navbar')
    {{-- End NavBar --}}
    
    {{-- Content --}}
    <div class="container mt-5">
      @yield('content')
    </div>

     
    {{-- End Content --}}

    {{-- Footer --}}


    {{-- Script --}}
    @include('contohLayout.partials.script')
    {{-- End Script --}}

    {{-- End Footer --}}
   </div>

    
  </body>
</html>