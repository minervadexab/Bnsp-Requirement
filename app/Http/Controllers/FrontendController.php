<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Event;
use Illuminate\Http\Request;

class FrontendController extends Controller
{


//article
public function articles()
{
    $articles = Article::all();

    return view('frontend.articles', [
        'articles' => $articles
    ]);
}


public function articleDetail($slug)
{
    $article = Article::where('slug', $slug)->firstOrFail();

    $relatedArticles = Article::where('id', '!=', $article->id)
        ->latest()
        ->take(3)
        ->get();

    return view('frontend.article-detail', compact(
        'article',
        'relatedArticles'
    ));
}


//event
public function events()
{
    $events = Event::latest()->get();

    return view('frontend.events', compact('events'));
}

public function eventDetail($slug)
{
    $event = Event::where('slug', $slug)->firstOrFail();

    $relatedEvents = Event::where('id', '!=', $event->id)
        ->latest()
        ->take(3)
        ->get();

    return view('frontend.events-detail', compact(
        'event',
        'relatedEvents'
    ));
}

}
