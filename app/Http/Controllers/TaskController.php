<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validationTask;
use Illuminate\Routing\Redirector;
use App\Task;
use App\Category;
use App\Block;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.tasks', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $blocks = Block::all();

        return view('tasks.create', compact('categories', 'blocks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validationTask $request)
    {
        $task = new Task;
        $task->title = $request->title;
        $task->description= $request->description;
        $task->category_id = $request->category_id;
        $task->save();
        $task->blocks()->attach($request->block);


        return redirect()->route('task');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {   
        return view('tasks.show', compact('task'));
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        $categories=Category::all();
        $blocks = Block::all();

        return view('tasks.edit', compact('task', 'categories', 'blocks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validationTask $request , Task $task)
    {
        $task->update($request->all());
        $task->blocks()->sync($request->block);

        return redirect()->route('task');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('task');
    }
}