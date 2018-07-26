@extends('layout.app')
@section('content')

@section('title')
  Pagina inicial
@endsection

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @each('main.post', $posts, 'post', 'main.empty_post')

        {{-- Pager --}}
          @includeIf('news.main.paginate')
        {{-- end paginte --}}

      </div>
    </div>
  </div>
  <hr>
@endsection