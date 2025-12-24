<!doctype html>
<html @php(language_attributes())>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @php(do_action('get_header'))
  @php(wp_head())

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body @php(body_class())>
  @php(wp_body_open())

  <div id="app">
    <a class="sr-only focus:not-sr-only" href="#main">
      {{ __('Skip to content', 'sage') }}
    </a>

    @include('sections.header')

    @hasSection('sidebar')
      <div
        class="py-lg gap-lg xl:container-60 container flex flex-col lg:flex-row">
        <main id="main" class="main grow">
          @yield('content')
        </main>

        <aside class="sidebar space-y-sm">
          @yield('sidebar')
        </aside>
      </div>
    @else
      <main id="main" class="main container">
        @yield('content')
      </main>
    @endif

    @include('sections.footer')
  </div>

  @php(do_action('get_footer'))
  @php(wp_footer())
</body>

</html>
