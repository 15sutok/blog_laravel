@extends('articles.layouts.app')


@section('content')

    <h2>{{$article->title}}</h2>

    <article>{{ $article->body }}</article>

    <span>Published: {{ $article->published_at }}</span>


@endsection
