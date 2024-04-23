<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function addtask()
    {
        return view('addtask');
    }
    public function storetask(Request $request)
    {
        $request->validate([
            'title'=>'required|max:100',
            'description'=>'required'
        ]);
        Task::create($request->all());
        session()->flash('successful','Task Added Successfully');
        return redirect('/');
    }
    public function viewtask(Request $req)
    {
        $tasks = Task::query();

        //Sorting
        if($req->has('sort'))
        {
            $sort=$req->sort== 'date' ? 'created_at' : 'created_at desc';
            $tasks->orderByRaw($sort);
        }
        $tasks = $tasks->get();
        return view('viewtask',['tasks'=>$tasks]);
    }
    public function delete($id)
    {
        $model=Task::find($id);
        $model->delete();
        return redirect('/');
    }
    public function edit($id)
    {
        $tasks=Task::find($id);
        return view('edit',['tasks'=>$tasks]);
    }
    public function update(Request $req)
    {
        $req->validate([
            'title'=>'required|max:100',
            'description'=>'required'
        ]);
        
        $model=Task::find($req->id);
        $model->title=$req->title;
        $model->description=$req->description;
        $model->save();
        session()->flash('success','Task Updated Successfully');
        return redirect('/');
    }
}
