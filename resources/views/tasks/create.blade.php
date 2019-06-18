@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h2>New Task</h2>
            {{--<h3>{{ $list }}</h3>--}}
            <form method="post" action="/lists/{{ $list->id }}/task">
                {{ csrf_field() }}

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
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
                    <input type="text"  name="title" class="form-control {{ $errors->has('title') ? 'is-danger' : '' }}" id="titleInput" aria-describedby="emailHelp" placeholder="Task Title">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea name="description" class="form-control {{ $errors->has('description') ? 'is-danger' : '' }}" id="descriptionTextArea" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@stop
