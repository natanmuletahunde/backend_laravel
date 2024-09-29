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
            'task' => 'required|string|max:255',
        ]);
    
        $todo = new Todo();
        $todo->task = $request->task; // 'task' column must exist in the table
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
