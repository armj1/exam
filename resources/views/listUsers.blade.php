<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User list</title>
    </head>
    <body>
        <div class="container">
            <h4>User list:</h4>
            <table border='1'>
                <tr>
                    <td>ID</td>
                    <td>E-mail</td>
                    <td>Name</td>
                    <td>Surname</td>
                    <td>Department</td>
                    <td>Role</td>
                </tr>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->surname}}</td>
                    <td>{{$user->department}}</td>
                    <td>{{$user->role}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>