
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
{{ Form::date('date', null,['class' => 'form-control']) }}
</div>
<div class="row justify-content-center mt-3">
  <div class="col-sm-4">
    <a href="{{ route('task.index')}}" class="btn btn-block btn-secondary">Back</a>
  </div>
  <div class="col-sm-4">
    <button class="btn btn-block btn-success" type="submit">Save Task</button>
  </div>
</div>

 
