<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskAddRequest;
use App\Http\Requests\TaskUpdateRequest;
use App\Models\Todolisttask;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function list()
    {
        $tasks = Todolisttask::all();
        return view('list' , compact('tasks'));
    }
    public function add()
    {
        return view('add');
    }
    public function update($id)
    {
        $tasks = Todolisttask::findOrFail($id);
        return view('update', compact('tasks'));
    }


    public function Taskadd(TaskAddRequest $request)
    {
        Todolisttask::create([
            "task_name" => $request->task_name,
            "task_explanation" => $request->task_explanation,
            "task_type" => $request->task_type,
            "task_start_date" => $request->task_start_date,
            "task_end_date" => $request->task_end_date,
        ]);

        return redirect('list');
    }

    public function Taskupdate(TaskUpdateRequest $request , $id)
    {
        $taskUpdate = Todolisttask::findOrFail($id);
        $taskUpdate->update($request->all());

        return redirect('list');
    }

    public function Taskdelete($id)
    {
        $taskDelete = Todolisttask::findOrFail($id);
        $taskDelete->delete();

        return redirect('list');
    }
}
