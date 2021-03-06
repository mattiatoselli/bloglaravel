<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Hash;
use DB;
use App\User;
use App\Argument;

class UsersController extends Controller
{
    public function index()
    {
        $staff = User::where('staffrole', '1')->get();
        $arguments = Argument::all();
        return view('child', ['users' => $staff, 'arguments' => $arguments]);
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        return view('auth.updateuser', ['user'=>$user]);
    }
    
    public function update($id)
    {
        $validatedData = request()->validate([
        'name' => ['required', 'string', 'max:255', 'min:8'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users,{id}'],
        'image'=> ['url'],
        'description' => ['string', 'max:1000'],
        ]);
        $user = User::find($id);
        $user->name = request('name');
        $user->email = request('email');
        $user->image = request('image');
        $user->description = request('description');
        $user->update();
        return redirect('/');
    }
}
