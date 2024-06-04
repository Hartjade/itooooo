<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="/login">
        @csrf

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Login</button>
    </form>

</body>

</html>