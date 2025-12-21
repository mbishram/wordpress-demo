<article @php(post_class('space-y-sm'))>
  <header class="space-y-xs">
    <h2 class="entry-title link text-2xl">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h2>

    @include('partials.entry-meta')
  </header>

  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
