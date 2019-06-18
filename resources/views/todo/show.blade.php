@extends('layouts.app')

@section('content')
    <div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card m-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <h3>{{$list->name}}</h3>
                                    @if ($list->description)
                                        <p>{{ $list->description }}</p>
                                    @endif
                                    <a class="text-muted" href="/lists/{{ $list->id }}/edit">Edit List</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card m-3">
                    <div class="container">
                        <div class="row pt-3">
                            <div class="col-md-12">
                                <div class="float-left">
                                    <a role="button" class="btn btn-primary" href="/lists/{{ $list->id }}/task">Add Task</a>
                                </div>

                                <div class="float-right">
                                    <form method="Post" action="/lists/{{ $list->id }}">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button class="btn btn-outline-danger" type="submit">Delete List</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-12 p-0">
                                @if ($list->tasks->count())
                                    <ul style="list-style: none; padding-right: 40px;">
                                        @foreach($list->tasks as $task)
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-1 pr-0 pt-3">
                                                        <form method="post" action="/task/{{ $task->id }}/complete">
                                                            {{ method_field('PATCH') }}
                                                            {{ csrf_field() }}

                                                            @if ($task->completed == 0)
                                                                <button class="no-button">
                                                                    <i class="far fa-check-circle fa-1x"></i>
                                                                </button>
                                                            @elseif ($task->completed == 1)
                                                                <button class="no-button">
                                                                    <i class="fas fa-check-circle fa-1x success"></i>
                                                                </button>
                                                            @endif
                                                        </form>
                                                    </div>
                                                    <div class="col-md-10 p-0">
                                                        <p>{{ $task->title }}</p>
                                                        <small class="text-muted">{{{ $task->description }}}</small>
                                                    </div>
                                                    <div class="col-md-1 pr-0">
                                                        <a href="/lists/{{ $list->id }}/task/{{$task->id}}/edit">
                                                            <a href="{{ route('edit.task', ['list'=>$list->id,'task'=>$task->id]) }}">

                                                                <i class="fas fa-pen-square fa-1x pr-2"></i>
                                                            </a>

                                                            <form method="Post" action="/tasks/{{ $task->id }}">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}
                                                                <button class="no-button">
                                                                    <i class="fas fa-trash-alt fa-1x"></i>
                                                                </button>
                                                            </form>
                                                    </div>
                                                </div>

                                            </li>
                                            <hr>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop