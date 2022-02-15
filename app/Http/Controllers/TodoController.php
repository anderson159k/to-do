<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos=Todo::get();
        return view("welcome", compact("todos"));
    }   

    public function store(Request $request){
        $data = $request->all();
        Todo::create([
            "name" => $data["todo"],
            "title" => $data["todo"],
            "complete" => false
        ]);
        return redirect('/');
    }
}
