<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update User</h1>

    <form action="updateUser" method="POST">
        @csrf
        <div class="">
        <div class="">
                <label for="fname">id</label>
                <input type="text" placeholder="input first name" name="id" value="{{$data->id}}">
            </div>
            <div class="">
                <label for="fname">fname</label>
                <input type="text" placeholder="input first name" name="fname" value="{{$data->fname}}">
            </div>
            <div class="">
                <label for="lname">lname</label>
                <input type="text" placeholder="input last name" name="lname" value="{{$data->lname}}">
            </div>
            <div class="">
                <label for="email">email</label>
                <input type="email" placeholder="input email name" name="email" value="{{$data->email}}">
            </div>
            <div class="">
                <label for="text">password</label>
                <input type="text" placeholder="input password name" name="password" value="{{$data->password}}">
            </div>
            <div class="">
                <input type="submit" value="submit">
            </div>
        </div>
    </form>
</body>
</html>