@extends('front.template.main')

@section('title', $article->title)
@section('content')
    <h3 class="title-front left">{{ $article->title }}</h3>
    <hr />
    <div class="row">
      <div class="col-md-9">
        {!! $article->content !!}
        <h4>Comentarios</h4>
        <div id="disqus_thread"></div>
        <script src="{{ asset('plugins/disqus/disqus.js') }}"></script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
      </div>
      <div class="col-md-3 aside">
          @include('front.template.partials.aside')
      </div>
    </div>
@endsection
