@extends('layout')

@section('content')
  <h1>新規作成</h1>

  <hr/>

  @include('errors.form_errors')

  {!! Form::open(['route' => 'articles.store']) !!}
    @include('articles.form', ['published_at' => null, 'submitButton' => 'Add Article'])
  {!! Form::close() !!}

@endsection