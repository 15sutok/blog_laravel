@component('mail::message')
<div class="container">
    New article {{$article->title}} was created!
</div>

@component('mail::button', ['url' =>url( '/articles/'. $article->id)]);
View the article.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
