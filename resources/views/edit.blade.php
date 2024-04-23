<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager - Edit Task</title>
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Task Manager - Edit Task</h1>
    </header>
    <main>
        <div class="add-task-form">
            <h2>Edit Task</h2>
            <form action="{{url('updatetask')}}" method="POST" id="add-task-form">
                @csrf 
                <div class="form-group">
                    <label for="title">Title : </label>
                    <input type="text" name="title" id="title" required|max:100 value="{{$tasks->title}}">
                    @error('title')
                        <p class="error">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description : </label>
                    <textarea name="description" id="description" cols="30" rows="5" >{{ old('description', $tasks->description) }}</textarea>
                    @error('description')
                        <p class="error">{{$message}}</p>
                    @enderror
                </div>
                <input type="hidden" name="id" value="{{$tasks->id}}">
                <input type="submit" value="Edit Task" class="btn">
            </form>
        </div>
    </main>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>