@extends('articles.layouts.app')

@section('title', 'Create article')

@section('content')
    <div class="container">
        <h3 class="my-2 font-weight-bold" >Create new article</h3>

        {!! Form::open(['url' => 'articles']) !!}

        @include('articles.partials.form')

        {!! Form::close() !!}

        @include('articles.partials.errors')

    </div>
@endsection
