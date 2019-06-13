@extends('layouts.app')

@section('content')
    {{--style="background-color: ghostwhite;"--}}
    <div>

        <div class="card m-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h3>{{$list->name}}</h3>
                        {{--<sp class="text-muted">{{ $list->description }}</sp>--}}
                        <a class="text-muted" href="/lists/{{ $list->id }}/edit">Edit List</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card m-3">
            <div class="container">

                <div class="row pt-3">
                    <div class="col-md-12">
                        <div class="float-left">
                            <a role="button" class="btn btn-primary" href="/lists/{{ $list->id }}/create">Add Task</a>
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
                    <div class="col-md-12">
                        @if ($list->tasks->count())
                            <ul style="list-style: none; padding-right: 40px;">
                                @foreach($list->tasks as $task)
                                    <li>{{ $task->title }}</li>
                                @endforeach
                                <hr>
                            </ul>
                        @endif
                    </div>
                </div>

            </div>
        </div>

@stop