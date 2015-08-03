<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ArticlesController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index(){

        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index',compact('articles'));
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id){
        $article = Article::findorFail($id);
        return view('articles.show',compact('article'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('articles.create');
    }


    public function store(ArticleRequest $request)
    {
        //validation
        Article::create($request->all());
        return redirect('articles');
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $article = Article::findorFail($id);
        return view('articles.edit',compact('article'));
    }

    /**
     * @param $id
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id,ArticleRequest $request)
    {
        $article = Article::findorFail($id);
        $article->update($request->all());
        return redirect('articles');
    }
}