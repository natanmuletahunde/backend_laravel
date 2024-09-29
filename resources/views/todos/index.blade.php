<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">To-Do List</h1>

        <!-- Form to create new task -->
        <form action="{{ route('todos.store') }}" method="POST">
    @csrf
    <input type="text" name="task" placeholder="Enter task">
    <button type="submit">Submit</button>
</form>


        <!-- Display all tasks -->
        <h3 class="mt-4">Tasks</h3>
        <ul class="list-group">
            @foreach($todos as $todo)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $todo->task }}
                    <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
