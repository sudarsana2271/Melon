<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Website Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
} */

section {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 95vh;
    width: 100%;
    margin: 0;
    /* background-repeat: no-repeat; */
    background-position: center;
    background-size: cover;
    background-image: url("https://cdn.eyeem.com/thumb/8aa90a0c05ee7e6a787e985604dfb0ad71135304-1614991727375/1100/1280?watermark=false");
}

.login-container {
    background-color: #1819964a;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 320px;
    text-align: center;
}

.login-container h1 {
    margin-bottom: 1rem;
    color: #fff;
    font-family: fangsong;
    font-size: xx-large;
}

.input-group {
    margin-bottom: 2rem;
}

.input-group label {
    display: block;
    margin-bottom: 0.6rem;
    color: #fff;
    font-size: x-large;
    font-family: ui-monospace;
}

.input-group input {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ddd;
    border-radius: 4px;
}

button {
    background-color:#f00d5b;
    color: white;
    border: none;
    padding: 0.75rem;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    font-size: 1rem;
}

button:hover {
    background-color:#eb3070b8;
}

.signup-link {
    margin-top: 1rem;
    color: #fff;
}

.signup-link a {
    color: #4CAF50;
    text-decoration: none;
}

.signup-link a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <section>
    <div class="login-container">
        <h1>Login to MusicHub</h1>
        <form action="db2.php" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p class="signup.php" style="color: white;">Don't have an account? <a href="signup.php" style="color: antiquewhite;">Sign up here</a></p>
    </div>
    </section>
</body>
</html>
