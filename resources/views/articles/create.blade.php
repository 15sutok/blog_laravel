@extends('articles.layouts.app')

@section('title', 'Create article')

@section('content')
    <div class="container">
        <h3>Create new article</h3>

        {!! Form::open(['url' => 'articles']) !!}

        @include('articles.partials.form')

        {!! Form::close() !!}

        @include('articles.partials.errors')

    </div>
@endsection
