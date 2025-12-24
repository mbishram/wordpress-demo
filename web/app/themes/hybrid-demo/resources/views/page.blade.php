@extends('layouts.app')

@section('content')
  @while (have_posts())
    @php(the_post())
    <div class="post-header">
      @include('partials.page-header')
    </div>
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
