<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Report list</title>
    </head>
    <body>
        <div class="container">
            <h4>Report list:</h4>
            <table border='1'>
                <tr>
                    <td>Report ID</td>
                    <td>User ID</td>
                    <td>Task ID</td>
                    <td>Link to report</td>
                </tr>
                @foreach($reports as $report)
                <tr>
                    <td>{{$report->id}}</td>
                    <td>{{$report->employee_id}}</td>
                    <td>{{$report->task_id}}</td>
                    <td>{{$report->file}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>