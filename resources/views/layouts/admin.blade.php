<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
    <script>
        $('.alert').alert()
    </script>
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">

        {{-- sidebar --}}
        @include('includes.sidebar-admin')

        {{-- page content --}}
        <div id="page-content-wrapper">

          {{-- navbar --}}
          @include('includes.navbar')

          {{-- section content --}}
          @yield('content')

        </div>
      </div>
    </div>

    {{-- script --}}
    @stack('prepend')
    @include('includes.script')
  </body>
</html>
