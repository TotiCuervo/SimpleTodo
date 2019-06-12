@extends('layouts.app')

@section('content')
    <h1>Tasks:</h1>

    <ul>
        @foreach ($tasks as $task)
            <li><a href="/tasks/{{ $task->id }}">{{$task->title}}</a></li>
        @endforeach
    </ul>

    <a class="btn btn-primary" href="{{ route('tasks.create') }}" role="button">New Task</a>



@stop