<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Category;
use App\Block;

class TaskController extends Controller
{
    // TODO:: Search for PHP DocBlocks
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.task', compact('tasks')); // Make it tasks.show
    }

    public function create()
    {
        $categories=Category::all();
        $blocks = Block::all();

        return view('tasks.create', compact('categories', 'blocks'));
    }

    public function store(Request $request)
    {
        $this->validate(request(), [

            'task' => 'required',

            'description' => 'required',

            'category_id' => 'required',

            'block' => 'required'

        ]);

        $task = new Task;

        $task->body = $request->task;

        $task->description= $request->description;

        $task->category_id = $request->category_id;

        $task->save();

        $task->blocks()->sync($request->block, false);

        return redirect('/task');
    }

    //read specific task

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    //edit task

    public function edit(Task $task)
    {
        $categories=Category::all();

        $blocks = Block::all();

        return view('tasks.edit', compact('task', 'categories', 'blocks'));
    }

    public function update(Request $request, Task $task)
    {
        $this->validate(request(), [

            'task' => 'required',

            'description' => 'required',

            'category_id' => 'required',

            'block' => 'required'

        ]);

        $task->body = $request->task;

        $task->description= $request->description;

        $task->category_id = $request->category_id;

        $task->save();

        $task->blocks()->sync($request->block, false);

        return redirect('/task');
    }

    //delete task

    public function delete($id)
    {
        Task::find($id)->delete();

        return redirect('/task');
    }
}
