<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <h1>Dashboard</h1>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>first name</th>
                <th>lastname</th>
                <th>email</th>
                <th>password</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>

        @foreach($data as $user)
            <td>
                <td>{{$user->id}}</td>
                <td>{{$user->fname}}</td>
                <td>{{$user->lname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>
                    <a href="{{route('update',['id'=>$user->id])}}">update</a>
                    <a href="{{route('delete',['id'=>$user->id])}}">delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>   
    </table>
</body>
</html>