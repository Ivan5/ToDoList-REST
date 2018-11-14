{!! Form::open(['route' => 'task.store', 'method' => 'POST']) !!}
<div class="form-group">
{{Form::label('name', 'Task Name')}}
{{ Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Task Name']) }}
</div>
<div class="form-group">
{{Form::label('description', 'Description of Task')}}
{{ Form::textarea('description',null,['class' => 'form-control', 'placeholder' => 'About Task']) }}
</div>
<div class="form-group">
{{Form::label('date', 'Due Date')}}
{{ Form::date('date', \Carbon\Carbon::now(),['class' => 'form-control']) }}
</div>
<div class="row justify-content-center mt-3">
  <div class="col-sm-6">
    <button class="btn btn-block btn-success" type="submit">Create Task</button>
  </div>
</div>

 
{!! Form::close() !!}