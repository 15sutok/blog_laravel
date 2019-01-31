@extends('articles.layouts.app')


@section('content')

    <div class="jumbotron p-3 p-md-5 text-white bg-info">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
        </div>
    </div>
    <div class="row mb-2">
    @foreach($articles as $article)

        <div class="col-md-6">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <h3 class="mb-0">
                        <a class="text-dark" href="{{ route('articles.show',[$article->id]) }}">{{ $article->title }}</a>
                    </h3>
                    <div class="mb-1 text-muted">{{ $article->published_at }}</div>
                    <p class="card-text mb-auto">{{ $article->body }}</p>
                    <a href="{{ action('ArticleController@show',[$article->id]) }}">Continue reading</a>
                </div>

            </div>
        </div>
    @endforeach
    </div>



@endsection
