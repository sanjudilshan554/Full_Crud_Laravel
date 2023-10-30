<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <form action="login" method="post">
        @csrf
        <div class="">
            <div class="">
                <label for="email">email</label>
                <input type="email" name="email" placeholder="enter your email">
            </div>
            <div class="">
                <label for="password">password</label>
                <input type="password" name="password" placeholder="enter your password">
            </div>
            <div class="">
                <input type="submit" value="submit">
            </div>
            <div class="">
                <a href="register">register</a>
            </div>
        </div>
    </form>
</body>
</html>