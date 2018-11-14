@extends('layouts.main')

@section('title','Tasks Home')

@section('content')
  <div class="row justify-content-center mb-3">
      <div class="col-sm-4">
        <h1 class="text-center">{{ $task->name}}</h1>
      </div>
  </div>
  
@endsection