<?php

namespace App\Http\Controllers;

use App\Task;
use App\ToDo;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    public function create(Todo $list)
    {
        return view('tasks.create', compact('list'));
    }

    public function store(Todo $list)
    {
        $task = new Task;

        $validatedData = request()->validate([
            'title' => 'required|max:50',
        ]);

        $task->to_do_id = $list->id;
        $task->title =  request('title');
        $task->description = request('description');

        $task->save();

        return redirect()->action('ToDoController@show', compact('list'));
    }

    public function show(Task $task)
    {
        $this->authorize('view', $list);
        return view('tasks.show', compact('task'));
    }

    public function edit($list_id, $task)
    {

        $task = Task::findorFail($task);
        $list = ToDo::findorFail($list_id);

        $this->authorize('update', $list);


        return view( 'tasks.edit', compact('task'), compact('list'));
    }

    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:50',
        ]);

        $task = Task::findorFail($id);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();

        $list = ToDo::findorFail($task->to_do_id);

        return redirect()->action('ToDoController@show', compact('list'));

    }

    public function destroy(Task $task)
    {
        $list = ToDo::findorFail($task->to_do_id);

        $task->delete();

        return redirect()->action('ToDoController@show', compact('list'));

    }

    public function complete(Task $task)
    {

        $task->toggleComplete();

        $list = ToDo::findorFail($task->to_do_id);
        return redirect()->action('ToDoController@show', compact('list'));

    }
}
