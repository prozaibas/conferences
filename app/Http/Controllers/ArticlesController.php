<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;
use Illuminate\Support\Facades\View;
use Spatie\FlareClient\View as FlareClientView;
use App\Models\Article;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected array $articles = [
        1 =>[
            'title' => 'First article',
            'content' => 'Lorem ipsum dolor sis amet.'
        ],
        2 => [
            'title' => 'Second article',
            'content' => 'Aut ducimus enim in veniam.'
        ]
        ];

    public function index()
    {
        $article = new Article();

        return view('articles.index', ['articles' => $article->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request, Article $article)
    {
        $validated = $request->validated();
        $articleItem = $article->create($validated);

        $request->session()->flash('status', 'Article created!');

        return redirect()->route('articles.show', ['article' => $articleItem->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return view('articles.show', ['article' => Article::findorFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}