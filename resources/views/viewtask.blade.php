<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager - View Tasks</title>
    <link rel="stylesheet" href="{{ asset('css/table-styles.css') }}">
</head>
<body>
    <header>
        <h1>Task Manager - View Tasks</h1>
        <a href="{{ url('addtask') }}"><button type="button" class="btn-add">Add Task</button></a>
    </header>
    @if(session('success'))
    <div class="success-message">
        {{ session('success') }}
    </div>
    @endif
    @if(session('successful'))
    <div class="success-message">
        {{ session('successful')}}
    </div>
    @endif
    <main>
        <div class="task-list">

            <div class="divsort">
            <form action="{{url('/')}}" method="GET">
                <label for="sort">Sort By Date :</label>
                    <select name="sort" id="sort">
                     <option value="date">Newest First</option>
                     <option value="date-desc">Oldest First</option>
                    </select>
                <button type="submit">Sort</button>
            </form>
            </div>

            @if($tasks->isEmpty())
            <p class="empty">No Task Found. Please Create A Task By Cliking "Add Task"</p>
            @else

            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td class="titlespace">{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td class="action">
                            <button type="button" class="btn-dlt" onclick="confirmDelete('{{ $task->id }}')">Delete</button>
                               <a href="/edit/{{ $task->id }}"><button class="btn-edit">Edit</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </main>

    <script src="{{ asset('js/scripts.js') }}"></script>
     <footer class="footer">
        <p class="footermark">Created By Mrinal Kanti Ganguli</p>
     </footer>
    
</body>
</html>

