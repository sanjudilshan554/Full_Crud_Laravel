<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register new user</h1>

    <form action="register" method="POST">
        @csrf
        <div class="">
            <div class="">
                <label for="fname">fname</label>
                <input type="text" placeholder="input first name" name="fname">
            </div>
            <div class="">
                <label for="lname">lname</label>
                <input type="text" placeholder="input last name" name="lname">
            </div>
            <div class="">
                <label for="email">email</label>
                <input type="email" placeholder="input email name" name="email">
            </div>
            <div class="">
                <label for="password">password</label>
                <input type="password" placeholder="input password name" name="password">
            </div>
            <div class="">
                <input type="submit" value="submit">
            </div>
        </div>
    </form>
</body>
</html>