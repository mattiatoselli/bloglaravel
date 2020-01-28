<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Argument;
use App\Article;
class ArticlesController extends Controller
{
    public function store()
    {
        $user = Auth::user();
        dd(request('argument'));
        $argument = Argument::where('title',request('argument'))->get();
        dd($argument[0]);
        $argId = $argument[0]->id;
        $validatedData = request()->validate([
        'title' => ['required', 'string', 'max:80', 'min:12'],
        'body' => ['required', 'string', 'min:255'],
        ]);
        $article = new Article();
        $article->title = request('title');
        $article->body = request('body');
        dd($user->id);
    }
}
