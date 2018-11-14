@extends('layouts.main')

@section('title','Tasks Home')

@section('content')
  <div class="row justify-content-center mb-3">
      <div class="col-sm-4">
      <a href="{{ route('task.create')}}" class="btn btn-block btn-success">Create Task</a>
      </div>
  </div>
  @if($tasks->count() == 0)
    <p class="lead text-center">There are no taks listed</p>
  @endif
  @foreach($tasks as $task)
    <div class="row mt-3">
      <div class="col-sm-12">
        <h3><a href="{{ route('task.show',$task->id)}}">{{ $task->name }}</a> <small>{{ $task->created_at }}</small></h3>
        <hr>
        <p>{{ $task->description }}</p>
        <h4>Due Date: <small> {{ $task->due_date }}</small></h4>
        
        {!! Form::open(['route' => ['task.destroy',$task->id], 'method' => 'DELETE']) !!}
        <a href="{{ route('task.edit',$task->id)}}" class="btn btn-sm btn-warning">Edit</a>
          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        {!! Form::close() !!}
      </div>
    </div>
    <hr>
  @endforeach
  <div class="row justify-content-center">
    <div class="col-sm-6 text-center">
      {{ $tasks->links()}}
    </div>
  </div>
@endsection