<footer
  class="content-info gap-sm py-sm container flex flex-col flex-wrap items-center justify-center max-sm:text-center sm:flex-row sm:justify-between">
  <a class="brand link text-lg font-bold" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a>

  <div class="gap-md flex">
    <ol>
      <h2 class="mb-xs font-bold">{{ __('Archives', 'sage') }}</h2>
      @php(wp_get_archives())
    </ol>
    <ol>
      <h2 class="mb-xs font-bold">{{ __('Categories', 'sage') }}</h2>
      @php(wp_list_categories(['title_li' => '']))
    </ol>
  </div>
</footer>
