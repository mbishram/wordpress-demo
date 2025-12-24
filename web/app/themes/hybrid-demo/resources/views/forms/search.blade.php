<form role="search" method="get" class="search-form gap-sm flex"
  action="{{ home_url('/') }}">
  <label class="grow">
    <span class="sr-only">
      {{ _x('Search for:', 'label', 'sage') }}
    </span>

    <input type="search" placeholder="{!! esc_attr_x('Search &hellip;', 'placeholder', 'sage') !!}"
      value="{{ get_search_query() }}" name="s"
      class="border-secondary p-xs block w-full rounded-sm border">
  </label>

  <button
    class="hover:bg-primary/80 bg-primary py-xs px-sm mb-0 cursor-pointer rounded-sm text-white transition-colors">
    {{ _x('Search', 'submit button', 'sage') }}
  </button>
</form>
