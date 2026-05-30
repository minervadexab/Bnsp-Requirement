<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        // $totalArticles = Article::count()

        return view('admin.articles.index', compact('articles'));
    }

    // public function indexAdmin()
    // {

    //     $totalArticles = Article::count();

    //     return view('admin.dashboard', compact('totalArticles'));
    // }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
            'image' => 'nullable|image',
        ]);

        $image = null;

        if ($request->hasFile('image')) {

            $image = $request->file('image')
                ->store('articles', 'public');
        }

        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'category' => $request->category,
            'image' => $image,
        ]);

        return redirect()
            ->route('articles-admin.index')
            ->with('success', 'Article created successfully');
    }

    public function edit(Article $articles_admin)
    {
        return view('admin.articles.edit', [
            'article' => $articles_admin
        ]);
    }

    public function update(Request $request, Article $articles_admin)
    {
        $image = $articles_admin->image;

        if ($request->hasFile('image')) {

            $image = $request->file('image')
                ->store('articles', 'public');
        }

        $articles_admin->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'category' => $request->category,
            'image' => $image,
        ]);

        return redirect()
            ->route('articles-admin.index')
            ->with('success', 'Article updated');
    }

    public function destroy(Article $articles_admin)
    {
        $articles_admin->delete();

        return back()->with('success', 'Deleted');
    }
}
