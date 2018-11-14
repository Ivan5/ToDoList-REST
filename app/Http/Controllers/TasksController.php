<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Session;
class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::orderBy('due_date','asc')->paginate(3);
        return view('tasks.index')->with('tasks',$tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate the data
        $this->validate($request,[
            'name' => 'required|string|max:255|min:3',
            'description' => 'required|string|max:10000|min:10',
            'date' => 'required|date'
        ]);
        //create new task
        $task = new Task;
        //asing the tas data from our requestr
        $task->name = $request->name;
        $task->description = $request->description;
        $task->due_date = $request->date;
        //save the task
        $task->save();
        //Flash message
        Session::flash('success','Created Task Successfully');
        //Return a Redirect
        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        $task->dueDateFormatting = false;
        return view('tasks.edit')->with('task',$task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //Validate the data
        $this->validate($request,[
            'name' => 'required|string|max:255|min:3',
            'description' => 'required|string|max:10000|min:10',
            'date' => 'required|date'
        ]);
        //Find the related task
        $task = Task::find($id);
        //asing the tas data from our requestr
        $task->name = $request->name;
        $task->description = $request->description;
        $task->due_date = $request->date;
        //save the task
        $task->save();
        //Flash message
        Session::flash('success','Save tje Task Successfully');
        //Return a Redirect
        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
