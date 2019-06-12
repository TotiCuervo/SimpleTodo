@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <h1>{{$task->title}}</h1>
            <h4>{{ $task->description }}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a role="button" class="btn btn-secondary" href="/tasks/{{ $task->id }}/edit">Edit Task</a>
        </div>
    </div>

@stop