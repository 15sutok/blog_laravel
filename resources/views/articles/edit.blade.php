@extends('articles.layouts.app')

@section('title', 'Edit article')

@section('content')
    <div class="container">
        <h3 class="my-2 font-weight-bold ">Update article</h3>

        {!! Form::model($article,['method' => 'PATCH', 'route' => ['articles.update', $article->id]]) !!}

            @include('articles.partials.form')

        {!! Form::close() !!}

        {!! Form::model($article,['method' => 'DELETE', 'route' => ['articles.destroy', $article->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delele', ['class' => 'btn btn-secondary']) !!}
            </div>

        {!! Form::close() !!}


        @include('articles.partials.errors')

    </div>
@endsection
