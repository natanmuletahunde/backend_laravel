<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // Display all tasks
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    // Store a new task
    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required'
        ]);

        $todo = new Todo();
        $todo->task = $request->task;
        $todo->save();

        return redirect()->route('todos.index');
    }

    // Delete a task
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect()->route('todos.index');
    }
}
