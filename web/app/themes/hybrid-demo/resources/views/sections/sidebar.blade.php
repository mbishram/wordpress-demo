@php(get_search_form())

<div>
  <h2 class="mb-xs text-xl font-bold">{{ __('Recent Posts', 'hybrid-demo') }}
  </h2>
  <ol class="space-y-2xs">
    @foreach ($recent_posts() as $post)
      <li>
        <a href="{{ get_permalink($post) }}">
          {{ $post->post_title }}
        </a>
      </li>
    @endforeach
  </ol>
</div>

<div>
  <h2 class="mb-xs text-xl font-bold">{{ __('Recent Comments', 'hybrid-demo') }}
  </h2>
  <ol>
    @foreach ($recent_comments() as $comment)
      <li>
        <a
          href="{{ $comment->comment_author_url }}">{{ $comment->comment_author }}</a>
        on <a
          href="{{ get_comment_link($comment) }}">{{ $comment->post_title }}</a>
      </li>
    @endforeach
  </ol>
</div>
