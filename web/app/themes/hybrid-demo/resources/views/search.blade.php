@extends('layouts.app')

@section('content')
  <div class="container-60 space-y-lg">
    @include('partials.page-header')

    @php(get_search_form())

    @if (!have_posts())
      <x-alert type="warning">
        {!! __('Sorry, no results were found.', 'hybrid-demo') !!}
      </x-alert>
    @else
      <section class="space-y-lg">
        @while (have_posts())
          @php(the_post())
          @include('partials.content-search')
        @endwhile
      </section>
    @endif

    {!! get_the_posts_navigation() !!}
  </div>
@endsection
