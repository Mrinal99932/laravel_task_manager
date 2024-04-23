<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager - Add Task</title>
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Task Manager - Add Task</h1>
    </header>
    <main>
        <div class="add-task-form">
            <h2>Add New Task</h2>
            <form action="{{url('storetask')}}" method="POST" id="add-task-form">
                @csrf 
                <div class="form-group">
                    <label for="title">Title : </label>
                    <input type="text" name="title" id="title" required|max:100>
                    @error('title')
                        <p class="error">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description : </label>
                    <textarea name="description" id="description" cols="30" rows="5"></textarea>
                    @error('description')
                        <p class="error">{{$message}}</p>
                    @enderror
                </div>
                
                <input type="submit" value="Add Task" class="btn">
            </form>
        </div>
    </main>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>