@extends('layouts.app')

@section('content')
    <h1>{{$task->title}}</h1>
    <h4>{{ $task->description }}</h4>
@stop