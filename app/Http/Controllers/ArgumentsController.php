<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Argument;
use App\User;

class ArgumentsController extends Controller
{
    public function index($id)
    {
        $staff = User::where('staffrole', '1')->get();
        $argument = Argument::find($id);
        return view('summary', ['users' => $staff, 'argument' => $argument]);
    }
    
    public function store()
    {
        $validatedData = request()->validate([
        'title' => ['required', 'string', 'max:25', 'min:1'],
        'image'=> ['required','url'],
        ]);
        $user = new Argument();
        $user->title = request('title');
        $user->image = request('image');
        $user->save();
        return redirect('/');
    }
}
