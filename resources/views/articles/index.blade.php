@extends('layout')

@section('content')
  <h1>Articles</h1>
  @auth
    <a href="articles/create" class="btn btn-primary float-right">新規作成</a>
  @endauth
  <hr/>

  @foreach($articles as $article)
    <article>
      <h2>
        <a href="{{ url('articles', $article->id) }}">
          {{ $article->title }}
        </a>
      </h2>
    </article>
  @endforeach
@endsection