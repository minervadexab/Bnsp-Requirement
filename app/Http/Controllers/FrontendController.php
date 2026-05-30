<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Event;
use Illuminate\Http\Request;

class FrontendController extends Controller
{


    //article
    public function articles(request $request)
    {
        $articles = Article::all();
        // Ambil parameter category dari URL
        $category = $request->query('category');

        // Query artikel: filter berdasarkan category jika ada
        $articles = Article::when($category, function ($query, $category) {
            return $query->where('category', $category);
        })->orderBy('created_at', 'desc')->paginate(9);

        return view('frontend.articles', [
            'articles' => $articles,
            'selectedCategory' => $category // atau namanya $selectedCategory
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
