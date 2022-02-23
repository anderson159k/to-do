<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos=Todo::orderByDesc("id")->get();
        return view("welcome", compact("todos"));
    }   

    public function store(Request $request){
        $data = $request->all();
        Todo::create([
            "name" => $data["todo"],
            "complete" => false
        ]);
        return redirect('/');
    }

    public function show($id){
        $todos = Todo::find($id);
        return view('edit', ['task' => $todos]);
    }


    public function update(Request $request, $id){
        $data = $request->all();
        Todo::find($id)->update(["complete" => 1]);
        return redirect('/');
    }   

    public function destroy($id){
        Todo::findOrFail($id)->delete();

        return redirect('/');
    } 
}