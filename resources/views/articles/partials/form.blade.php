<div class="form-group">
    {!! Form::label('title', 'Tittle: ') !!}
    {!! Form::text('title', null, ['id' =>'title','class' => 'form-control','placeholder' => 'Enter your title', 'value' => old('title'), 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Text: ', ['class' => 'foo']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control','placeholder' => 'Enter your article text', 'value' => old('body'), 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('published_at', 'Published at: ') !!}
    {!! Form::date('published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tags', 'Tags: ') !!}
    {!! Form::select('tags[]', $tags, null, ['id' =>'tag-list', 'class' => 'form-control', 'multiple']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitText, ['class' => 'btn btn-primary']) !!}
</div>

@section('footer')
    <script>
        $('#tag-list').select2({
            placeholder: 'Select a tag',
        });
    </script>
@endsection
