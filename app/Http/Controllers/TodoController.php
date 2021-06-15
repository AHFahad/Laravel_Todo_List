<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
class TodoController extends Controller
{
    public function index()
    {
        // return Todo::all();
        $todos = Todo::orderBy('completed')->get();
        return view("todo.index")->with(['todos'=>$todos]);

    }
    public function create()
    {
        return view('todo.create');
    }
    public function upload(Request $req)
    {
        $req->validate([
            'title'=>'required|max:255'
        ]);
        $todo = $req->title;
        Todo::create(['title'=>$todo]);
        return redirect()->back()->with('success','Todo Created successfully');

    }
    public function edit($id)
    {
        $todo = Todo::find($id);
        $title = $todo->title;
        return view('todo.edit')->with(['id'=>$id, 'title'=> $title]);
    }
    public function update(Request $req )
    {
        $req->validate([
            'title'=>'required|max:255'
        ]);
        $updatedTodo = Todo::find($req->id);
        $updatedTodo->update(['title'=>$req->title]);
        return redirect('/index')->with("success","todo is updated!!!");
        // why todo.index not working??

    }

    public function completed($id){
        $todo = Todo::find($id);
        if($todo->completed){
            $todo->update(['completed' => false]);
            return redirect()->back()->with('success', "A todo is now incompleted");
        }
        else{
            $todo->update(['completed'=>true]);
            return redirect()->back()->with('success','A todo is completed');
        }
    }
    public function delete($id){

        $todo =Todo::find($id);
        $todo->delete();
        return redirect()->back()->with('success','Todo is deleted successfully');

    }
}
