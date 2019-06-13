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
        <div class="col-md-4">
            <form method="Post" action="/tasks/{{ $task->id }}">

                {{ method_field('DELETE') }}
                {{ csrf_field() }}

                <button class="btn btn-danger" type="submit" >Delete Task</button>
            </form>
        </div>

    </div>

@stop