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
    <meta name="csrf-token" content="{!! csrf_token() !!}">

    <title>@yield('title')</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css"/>
    @if (session('success'))
        <script>
            alert("{{ session('success') }}")
        </script>
    @endif
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
    @yield('script')
    @stack('addon-script')
  </body>
</html>
