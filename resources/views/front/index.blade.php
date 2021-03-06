@extends('front.template.main')

@section('content')
    <h3 class="title-front left">{{ trans('app.title_last_articles') }}</h3>
    <!--<h2>{{ trans('app.test', ['name' => 'Fernando', 'company' => 'Blog Facilito']) }}</h2>-->
    <div class="row">
      <div class="col-md-9">
        <div class="row">

          @foreach($articles as $article)
          <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-body">
                <a href="{{ route('front.view.article', $article->slug) }}" class="thumbnail">
                @foreach($article->images as $image)
                  <img src="{{ asset('images/articles/' . $image->name ) }}" alt="..." class="img-responsive img-article">
                @endforeach
                </a>
                <a href="{{ route('front.view.article', $article->slug) }}">
                  <h4 class="text-center">{{ $article->title }}</h4>
                </a>
                <hr>
                <i class="fa fa-folder-open-o"></i> <a href="{{ route('front.search.category', $article->category->name) }}">{{ $article->category->name }}</a>
                <div class="pull-right">
                  <i class="fa fa-clock-o"></i> {{ $article->created_at->diffForHumans() }}
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>
        {!! $articles->render() !!}
      </div>
      <div class="col-md-3 aside">
          @include('front.template.partials.aside')
      </div>
    </div>
@endsection
