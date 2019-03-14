@extends('articles.layouts.app')

@section('title', $article->title)

@section('content')

<div class="container py-3">

    <h2 class="my-2 font-weight-bold">{{$article->title}}</h2>

    <article class="lead text-justify font-weight-normal">{{ $article->description }}</article>

    <span class="d-inline-block m-1"><strong>Author:</strong> {{ $user->name }}</span>

    <a class="btn btn-primary float-right px-5 my-2" role="button" href="{{ route('articles.edit',[$article->id]) }}">Edit</a>

    <span class="d-block text-muted  ">Published: {{ $article->published_at->diffForHumans() }}</span>

    @unless($article->tags->isEmpty())

        <div class="container my-2">
            <h5>Tags:</h5>
                <ul class="list-inline">
                    @foreach($article->tags as $tag)
                        <li class="list-inline-item">
                            <a href="{{action('TagController@show', $tag->id)}}">{{$tag->name}}</a>
                        </li>
                    @endforeach
                </ul>
        </div>
    @endunless
</div>

@endsection
