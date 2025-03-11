<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::where('completed', false)->latest()->get();
        return view('pages.dashboard', compact('tasks'));
    }
    public function completed()
    {
        $tasks = Task::where('completed', true)->latest()->get();
        return view('pages.completed', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Task::create($validated);
        flash()->success('Task created');
        return redirect()->route('task.dashboard');
    }
    public function complete(string $id)
    {
        $task = Task::find($id);
        $task->completed = true;
        $task->save();
        flash()->success('Task completed');
        return redirect()->route('task.dashboard');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::find($id);

        return view('pages.edit', compact('task'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $task = Task::find($id);
        $task->update($validated);
        flash()->info('Task updated');
        return redirect()->route('task.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Task::destroy($id);
        flash()->info('Task deleted');
        return redirect()->route('task.dashboard');
    }
}
