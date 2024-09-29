@extends('layouts.app')

@section('content')
    <h1>Create Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Task Title:</label>
        <input type="text" name="title" id="title" required>

        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>

        <button type="submit">Create Task</button>
    </form>
@endsection
