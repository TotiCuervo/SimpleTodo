@extends('layouts.app')

@section('content')

    <div class="row pb-5">
        <div class="col-md-12">
            <h1 class="text-center">To Do Lists:</h1>
        </div>
    </div>

    {{--@foreach ($lists as $list)--}}

        {{--<div class="row pb-2">--}}
            {{--<div class="col-md-6 offset-md-3 text-center">--}}
                {{--<div class="card">--}}
                    {{--<a href="/lists/{{ $list->id }}"><h1>{{$list->name}}</h1></a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--@endforeach--}}

    @if ($lists->count())

        @foreach ($lists as $list)
            <div class="row pb-5">
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="card">
                        <div class="p-3">
                            <div>
                                <a class="no-dec" href="/lists/{{ $list->id }}"><h3>{{$list->name}}</h3></a>
                                @if ($list->description)
                                    <small>{{ $list->description }}</small>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    @else
        <div class="row pb-5">
            <div class="col-md-12 text-center">
                <h3>There are no ToDo's yet :(</h3>
            </div>
        </div>

    @endif

    <div class="row pb-5">
        <div class="col-md-6 offset-md-3 text-center">
            <div class="border border-dark">
                <a class="no-dec" href="{{ route('lists.create') }}" role="button">
                    <h2><i class="fas fa-plus-circle pr-2"></i>New List</h2>
                </a>
            </div>
        </div>
    </div>


    {{--<h1>To Do Lists:</h1>--}}

    {{--<ul>--}}
        {{--@foreach ($lists as $list)--}}
            {{--<li><a href="/lists/{{ $list->id }}">{{$list->name}}</a></li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}

    {{--<a class="btn btn-primary" href="{{ route('lists.create') }}" role="button">New List</a>--}}



@stop