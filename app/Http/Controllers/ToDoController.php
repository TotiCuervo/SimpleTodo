<?php

namespace App\Http\Controllers;

use App\Mail\TodoCreated;
use App\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }


    public function index()
    {
        $lists = ToDo::where('owner_id', auth()->id())->get();
        return view('todo.index', compact('lists'));
    }


    public function create()
    {
        return view('todo.create');
    }


    public function store(Request $request)
    {

        $todo = new Todo;
        $todo->name = $request->name;
        $todo->description = $request->description;
        $todo->owner_id = auth()->id();
        $todo->save();

        \Mail::to('totifercuervo@gmail.com')->send(
            new TodoCreated($todo)
        );

        return redirect()->action('ToDoController@index');
    }


    public function show(ToDo $list)
    {
        $this->authorize('view', $list);
        return view('todo.show', compact('list'));
    }


    public function edit(ToDo $list)
    {
        $this->authorize('view', $list);

        return view('todo.edit', compact('list'));
    }


    public function update(Request $request, ToDo $list)
    {
        $list->name = $request->name;
        $list->description = $request->description;
        $list->save();

        return redirect()->action('ToDoController@index');
    }


    public function destroy(ToDo $list)
    {
        $list->delete();
        return redirect()->action('ToDoController@index');
    }

}
