@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h2>New Task</h2>
            <form method="post" action="/task/{{ $task->id }}">

                {{ method_field('PATCH') }}

                {{ csrf_field() }}

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" required role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    </div>
                @endif

                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text"  name="title" class="form-control" id="titleInput" aria-describedby="emailHelp" value=" {{ $task->title }} ">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea name="description" class="form-control" id="descriptionTextArea" rows="3">{{ $task->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@stop
