<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Argument;

class ArgumentsController extends Controller
{
    public function index($id)
    {
        $argument = Argument::find($id);
        return view('summary', ['users' => $staff, 'argument' => $argument]);
    }
}
