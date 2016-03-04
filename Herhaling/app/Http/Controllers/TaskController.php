<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //

    public function index(){
        $tasks = Task::all();

        return view('tasks', compact('tasks'));
    }

    public function store(Requests\SaveTaskRequest $request){
        $task = new Task();
        $task->name = $request->name;
        $task->save();

        return redirect(route('home'))->with('message', 'Task saved!');
    }
    public function destroy($id){
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect(route('home'))->with('message', 'Task deleted!');
    }
}
