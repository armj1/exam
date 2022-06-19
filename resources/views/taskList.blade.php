<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task list</title>
    </head>
    <body>
        <div class="container">
            <h4>Task list:</h4>
            <table border='1'>
                <tr>
                    <td>User ID</td>
                    <td>Description</td>
                    <td>Task ID</td>
                    <td>Term</td>
                </tr>
                @foreach($tasks as $task)
                <tr>
                    <td>{{$task->employee_id}}</td>
                    <td>{{$task->description}}</td>
                    <td>{{$task->id}}</td>
                    <td>{{$task->term}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>