@extends('layouts.main')

@section('title','Edit Task')

@section('content')
@if(count($errors) > 0)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Errors:</strong>
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
      <button class="close" type="button" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
  <div class="row">
    <div class="col-sm-12">
      <h1>Edit  Task</h1>
      {!! Form::model($task,['route' => ['task.update',$task->id], 'method' => 'PUT']) !!}
        @component('components.taskForm')

        @endcomponent
      {!! Form::close() !!}
    </div>
  </div>
@endsection