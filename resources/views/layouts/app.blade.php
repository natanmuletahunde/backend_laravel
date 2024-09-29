<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('tasks.index') }}">Task List</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
