<footer
  class="content-info gap-sm container flex items-center justify-between">
  <a class="brand link text-lg font-bold" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a>

  <div class="gap-sm [&_a]:link [&_a]:underline! flex">
    @php(dynamic_sidebar('sidebar-footer'))
  </div>
</footer>
