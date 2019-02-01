<div class="form-group">
    {!! Form::label('title', 'Tittle: ') !!}
    {!! Form::text('title', null, ['class' => 'form-control','placeholder' => 'Enter your title']) !!}
</div>
<div class="form-group">
    {!! Form::label('body', 'Text: ', ['class' => 'foo']) !!}
    {!! Form::textarea('body', null, ['class' => 'form-control','placeholder' => 'Enter your article text']) !!}
</div>
<div class="form-group">
    {!! Form::label('published_at', 'Published_at: ') !!}
    {!! Form::date('published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitText, ['class' => 'btn btn-primary']) !!}
</div>
