<?php

namespace App\Http\Controllers;

use App\Article;
use App\Mail\ArticleCreated;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Auth;

class ArticleController extends Controller
{
    /**
     * ArticleController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => [ 'index','show']]);
    }

    /**
     * Display a listing of the articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new article.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $submitText = 'Create article';

        $tags = Tag::pluck('name','id');

        return view('articles.create',compact('submitText', 'tags'));
    }

    /**
     * Store a newly created article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {

        $article = Auth::user()->articles()->create($request->all());

        $article->tags()->attach(request('tags'));

        \Mail::to('admin@example.com')->send(
            new ArticleCreated($article)
        );

        session()->flash('flash_message','The article has been created');

        return redirect('articles');

    }

    /**
     * Display the specified article.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {

        return view('articles.show', compact('article','user'));
    }

    /**
     * Show the form for editing the specified article.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $tags = Tag::pluck('name','id');

        $submitText = 'Update article';

        return view('articles.edit', compact('article','submitText','tags'));
    }

    /**
     * Update the specified article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article)
    {

        $article->tags()->sync(request('tags'));

        $article->update($request->all());

        session()->flash('flash_message','The article has been updated');

        return redirect('articles');
    }

    /**
     * Remove the specified article from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect('articles');
    }
}
