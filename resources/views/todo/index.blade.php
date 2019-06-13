@extends('layouts.app')

@section('content')
    <h1>To Do Lists:</h1>

    <ul>
        @foreach ($lists as $list)
            <li><a href="/lists/{{ $list->id }}">{{$list->name}}</a></li>
        @endforeach
    </ul>

    <a class="btn btn-primary" href="{{ route('lists.create') }}" role="button">New List</a>



@stop