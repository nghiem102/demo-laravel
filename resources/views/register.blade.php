<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="http://localhost:8000/register-success" method="GET" class="form">
        <div>
            <label for="name">name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" name="password" id="password">
        </div>
        <button>
            submit
        </button>
    </form>
</body>
</html>
