@extends('articles.layouts.app')

@section('title', $article->title)

@section('content')

<div class="container">

    <h2>{{$article->title}}</h2>

    <article>{{ $article->description }}</article>

    <span>Author: {{ $user->name }}</span><br>

    <span>Published: {{ $article->published_at->diffForHumans() }}</span>

    <a href="{{ route('articles.edit',[$article->id]) }}">Edit</a>

    @unless($article->tags->isEmpty())

        <h5>Tags:</h5>
            <ul>
                @foreach($article->tags as $tag)
                    <a href="{{action('TagController@show', $tag->id)}}"><li>{{$tag->name}}</li></a>
                @endforeach
            </ul>
    @endunless
</div>


@endsection
