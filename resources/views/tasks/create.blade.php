@extends('layouts.main')

@section('title','Create Task')

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
      <h1>Create Task</h1>
      @component('components.taskForm')

      @endcomponent
    </div>
  </div>
@endsection
