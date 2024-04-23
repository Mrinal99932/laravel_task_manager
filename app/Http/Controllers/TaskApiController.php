<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskApiController extends Controller
{
    public function index()
    {
        $tasks=Task::all();
        return response()->json($tasks);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max:100',
            'description'=>'required'
        ]);
        $task=Task::create($request->all());
        return response()->json($task,201);
    }
    public function show($id)
    {
        $task=Task::findOrFail($id);
        return response()->json($task);
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'title'=>'required|max:100',
            'description'=>'required'
        ]);
        $task=Task::findOrFail($id);
        $task->update($request->all());
        return response()->json($task,200);
    }
    public function destroy($id)
    {
        $task=Task::findOrFail($id);
        $task->delete();
        return response()->json(['status'=>'success','messege'=>'Task Deleted']);
    }
}
