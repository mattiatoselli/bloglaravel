<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Argument;
use App\Article;
class ArticlesController extends Controller
{
    public function store()
    {
        $argument = Argument::find(request('argument'));
        dd($argument);
    }
}
