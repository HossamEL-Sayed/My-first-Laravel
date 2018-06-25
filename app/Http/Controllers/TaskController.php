<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::all();

    return view('tasks.index', compact('tasks'));
	}

	public function show($id)
    {
    	$task = Task::find($id);

    return view('tasks.show', compact('task'));
	}	

	public function create()
    {
    return view('tasks.create');
	}

    public function store()
    {
        $this->validate(request(),[

            'task' => 'required',

            'description' => 'required'

        ]);

        task::create([

            'body'=> request('task'),

            'description'=> request('description')

        ]);

        return redirect('/');
    }

    public function delete($id)
    {
        Task::find($id)->delete();

    return redirect('/');
    }
	
    public function edit($id)
    {
        $task = Task::find($id);

    return view('tasks.edit', compact('task'));
	}

	public function update(request $request, $id)
    {

        $this->validate(request(),[

            'task' => 'required',

            'description' => 'required'

        ]);

        $task = Task::find($id);

        $task->body = request('task');

        $task->description = request('description');

        $task->save();

        return redirect('/');
    }
}
