<!DOCTYPE html>
<html lang="en">

  {{-- head --}}
  @include('news.partials.head')
  {{-- end head --}}

  <body>

   {{-- header e navegação --}}
      @include('news.partials.header')
   {{-- end header e navegação --}}


    @yield('content')

    {{-- Footer --}}
      @include('news.partials.footer')
    {{-- EndFooter --}}

  </body>

</html>
