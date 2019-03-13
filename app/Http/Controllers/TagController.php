<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show(Tag $tag)
    {
        $articles = $tag->articles;

        return view('articles.index',compact('articles'));
    }
}
