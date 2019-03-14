@extends('articles.layouts.app')

@section('title', 'All articles')

@section('content')

    <div class="jumbotron jumbotron-fluid p-3 p-md-5 text-center text-white bg-info">
        <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
    </div>
    <div class="container">
        <div class = "row">
            @foreach($articles as $article)
                <div class="col-md-6 py-3 ">
                    <h3 class="mb-0">
                        <a class="text-dark" href="{{ route('articles.show',[$article->id]) }}">{{ $article->title }}</a>
                    </h3>
                    <div class="mb-1 text-muted">{{ $article->published_at->diffForHumans() }}</div>
                    <p class="card-text mb-auto">{{ $article->description }}</p>
                    <a href="{{ action('ArticleController@show',[$article->id]) }}">Continue reading</a>
                </div>
            @endforeach
        </div>
    </div>



@endsection
